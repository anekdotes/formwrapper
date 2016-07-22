<?php
/*
 * This file is part of the Logger package.
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
class Blank extends Control
{
    protected $nbParams = 2;

    /**
     * Prepare the input.
     *
     * @param array $arguments Contains the passed arguments
     *                         [0]  string[]  $opts   Contains the option="value" key-value pairs to be added to the field
     *                         [1]  string    $value  Contains the field's default value.
     */
    public function prepare($arguments)
    {
        $opts = $arguments[0];
        $value = $arguments[1];
        $html = '<p';
        $html .= $this->getOpts($opts);
        $html .= '>';
        $html .= $value;
        $html .= '</p>';

        return $html;
    }
}
