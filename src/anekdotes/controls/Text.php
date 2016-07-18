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
 * Wraps a basic input text.
 */
class Text extends Control
{
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
        $h = '<input type="text" name="'.$name.'" value="'.$value.'"';
        $h .= $this->get_opts($opts);
        $h .= '/>';

        return $h;
    }
}