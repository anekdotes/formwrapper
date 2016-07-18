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
        $args = array_slice($arguments, 1, count($arguments) - 1);
        $title = $arguments[0];
        $controlStr = 'Anekdotes\\FormWrapper\\Controls\\'.$name;
        $control = new $controlStr();
        $prepared = $control->prepare($args);
        end($arguments);
        $wrapStr = 'Anekdotes\\FormWrapper\\Wrappers\\'.current($arguments);
        $wrap = new $wrapStr();

        return $wrap->handle($title, $prepared);
    }
}
