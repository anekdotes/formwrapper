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
     */
    public function __call($name, $arguments)
    {
        $args = array_slice($arguments, 0, count($arguments) - 1);
        $control = new Anekdotes\FormWrapper\Controls\$name();
        $prepared =  $control->prepare($args);
        end($arguments);
        $wrap = new Anekdotes\FormWrapper\Wrappers\current($arguments);
        return $wrap->handle($prepared);
    } 
}
