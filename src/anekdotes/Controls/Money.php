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
 * Prepares a money input field.
 */
class Money extends Control
{
    protected $nbParams = 3;

    /**
     * Prepare the input.
     *
     * @param array $arguments Contains the passed arguments
     *                         [0]  string    $name   Field's name, to be used by the form as a key.
     *                         [1]  string[]  $opts   Contains the option="value" key-value pairs to be added to the field
     *                         [2]  string    $value  Contains the field's default value.
     */
    public function prepare($arguments)
    {
        $name = $arguments[0];
        $opts = $arguments[1];
        $value = $arguments[2];
        $html = '<div class="input-group">';
        $html .= '<span class="input-group-addon">$</span>';
        $html .= '<input type="number" step="any" name="'.$name.'" value="'.$value.'"';
        $html .= $this->getOpts($opts);
        $html .= '/></div>';

        return $html;
    }
}
