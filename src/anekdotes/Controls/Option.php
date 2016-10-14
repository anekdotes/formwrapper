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
 * Wraps a basic option field. Probably should only be used without wrap to be honest.
 */
class Option extends Control
{
    protected $nbParams = 4;

    /**
     * Prepare the input.
     *
     * @param array $arguments Contains the passed arguments
     *                         [0]  string    $name     Checkbox's name. Can be not unique, but will bind it to a group if not.
     *                         [1]  string    $key      Checkbox's value.
     *                         [2]  string[]  $opts     Contains the option="value" key-value pairs to be added to the field
     *                         [3]  boolean   $checked  If the checkbox is checked as default
     */
    public function prepare($arguments)
    {
        $name = $arguments[0];
        $key = $arguments[1];
        $opts = $arguments[2];
        $checked = $arguments[3];
        $html = '<option value="'.$key.'"';
        if ($checked) {
            $html .= ' selected="selected"';
        }
        $html .= $this->getOpts($opts);
        $html .= '>'.$name.'</option>';

        return $html;
    }
}
