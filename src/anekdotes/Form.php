<?php
/*
 * This file is part of the Form Wrapper package.
 *
 * (c) Anekdotes Communication inc. <info@anekdotes.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Anekdotes\FormWrapper;

use Anekdotes\FormWrapper\Controls\Text;

/**
 * Controller class in charge of receiving calls and dispatching them.
 */
class Form
{
    public $controlsNamespace;
    public $wrappersNamespace;
    public $defaultWrapper;
    private $ignoreUndefinedWrap = false;

    public function __construct($controls = '', $wrappers = '', $defaultWrapper = 'None')
    {
        $this->controlsNamespace = $controls == '' ? 'Anekdotes\\FormWrapper\\Controls\\' : $controls;
        $this->wrappersNamespace = $wrappers == '' ? 'Anekdotes\\FormWrapper\\Wrappers\\' : $wrappers;
        $this->defaultWrapper = $defaultWrapper == '' ? 'None' : $defaultWrapper;
    }

    public function setIngoreUndefinedWrap($ignore)
    {
        $this->ignoreUndefinedWrap = $ignore;
    }

    public function getIngoreUndefinedWrap()
    {
        return $this->ignoreUndefinedWrap;
    }

    /**
     * Calls the desired control, prepare it and pass it to a wrapper.
     *
     * @param string $name      The name of the called function. Represents the Control class to be used
     * @param array  $arguments The passed arguments to the function
     *                          [0]  string    $title  Field's title, to potentially be displayed in a label.
     *                          [x]            $args   All arguments to be passed to the control
     *                          [-1]  string   $wrap   Name of the wrapper class to be used
     */
    public function __call($name, $arguments)
    {
        $title = $arguments[0];
        $controlStr = $this->controlsNamespace . $name;

        if (!class_exists($controlStr)) {
            $controlStr = $this->controlsNamespace . ucfirst($name);
        }

        $control = new $controlStr();
        $slice = $control->getNbParams() < count($arguments) - 1 ? 0 : 1;
        $args = array_slice($arguments, 1, count($arguments) - $slice);
        $prepared = $control->prepare($args);
        $wrapStr = $this->obtainWrapperName($control, $arguments);
        
        if ($this->ignoreUndefinedWrap) {
            if (!class_exists($wrapStr)) {
                return '';
            }
        }

        $wrap = new $wrapStr();

        return $wrap->handle($prepared, $title);
    }

    /**
     * Generates the opening of a form and wraps it.
     *
     * @param string   $url    The url to send the action to
     * @param string   $method The header request method to send the form (i.e. : GET,POST)
     * @param string[] $opts   Contains the option="value" key-value pairs to be added to the form
     *
     * @return string The wrapped HTML form
     */
    public function open($url, $method, $opts = [])
    {
        $realMethod = $method;

        if ($realMethod != 'get') {
            $realMethod = 'post';
        }

        if (!array_key_exists('class', $opts)) {
            $opts['class'] = 'form-horizontal';
        }

        $html = "<form action=\"$url\" method=\"$realMethod\"";
        $control = new Text();
        $html .= $control->getOpts($opts);
        $html .= '>';

        if ($method != 'get' && $method != 'post') {
            $html .= '<input type="hidden" name="_method" value="' . $method . '" />'."\n";
        }

        return $html;
    }

    /**
     * Closes an HTML form.
     *
     * @return string The HTML closure
     */
    public function close()
    {
        $html = '</form>';

        return $html;
    }

    private function obtainWrapperName($control, $arguments)
    {
        $currentWrapper = $this->defaultWrapper;
        $wrapperNameSpace = $this->wrappersNamespace;
        $nbParams = $control->getNbParams();
        
        //We have normally have x+2 $arguments ('title' and 'wrap'). If we're missing wrap , we'll have x+1
        if ($nbParams < count($arguments) - 1) {
            end($arguments);

            $currentWrapper = current($arguments);
        }

        return $wrapperNameSpace.$currentWrapper;
    }
}
