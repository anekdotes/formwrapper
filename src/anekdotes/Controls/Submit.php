<?php
/*
 * This file is part of the Form Wrapper package.
 *
 * (c) Anekdotes Communication inc. <info@anekdotes.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Anekdotes\FormWrapper\Controls;

/**
 * Generates a wrapping over no base field. Displays the provided value without options to edit it.
 */
class Submit extends Control
{
    protected $nbParams = 2;

    /**
     * Prepare the input.
     *
     * @param array $arguments Contains the passed arguments
     *                         [0]  string    $name  Contains the field's name.
     *                         [1]  string[]  $opts  Contains the option="value" key-value pairs to be added to the field
     */
    public function prepare($arguments)
    {
        $name = $arguments[0];
        $opts = $arguments[1];
        $html = '<input type="submit" value="'.$name.'"';
        $html .= $this->getOpts($opts);
        $html .= '/>';

        return $html;
    }
}
