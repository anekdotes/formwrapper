<?php
/*
 * This file is part of the Logger package.
 *
 * (c) Anekdotes Communication inc. <info@anekdotes.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Anekdotes\FormWrapper;

/**
 * Controller class in charge of receiving calls and dispatching them.
 */
class Form
{
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
        $controlStr = 'Anekdotes\\FormWrapper\\Controls\\'.$name;
        $control = new $controlStr();
        $slice = $control->getNbParams() < count($arguments) - 1 ? 0 : 1;
        $args = array_slice($arguments, 1, count($arguments) - $slice);
        $prepared = $control->prepare($args);
        $wrapStr = $this->obtainWrapperName($control, $arguments);
        $wrap = new $wrapStr();

        return $wrap->handle($title, $prepared);
    }

    private function obtainWrapperName($control, $arguments)
    {
        $currentWrapper = 'None';
        $wrapperNameSpace = 'Anekdotes\\FormWrapper\\Wrappers\\';
        $nbParams = $control->getNbParams();
        //We have normally have x+2 $arguments ('title' and 'wrap'). If we're missing wrap , we'll have x+1
        if ($nbParams < count($arguments) - 1) {
            end($arguments);
            $currentWrapper = current($arguments);
        }

        return $wrapperNameSpace.$currentWrapper;
    }
}
