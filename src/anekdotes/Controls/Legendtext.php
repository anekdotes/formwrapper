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

use Anekdotes\Support\Arr;

/**
 * Wraps a basic input text.
 */
class Legendtext extends Control
{
    protected $nbParams = 4;

    /**
     * Prepare the input.
     *
     * @param array $arguments Contains the passed arguments
     *                         [0]  string    $name   Field's name, to be used by the form as a key.
     *                         [1]  string[]  $opts   Contains the option="value" key-value pairs to be added to the field
     *                         [2]  string    $value  Contains the field's default value.
     *                         [3]  string    $legend Text to put in the legend
     */
    public function prepare($arguments)
    {
        $name = $arguments[0];
        $opts = $arguments[1];
        $value = $arguments[2];
        $legend = $arguments[3];
        $positionRight = Arr::get($opts, 'position', 'left') == 'right';
        Arr::remove('position', $opts);
        $html = '<div class="input-group">';
        if (!$positionRight) {
            $html .= '<span class="input-group-addon">'.$legend.'</span>';
        }
        $html .= '<input type="text" name="'.$name.'" value="'.$value.'"';
        $html .= $this->getOpts($opts);
        $html .= '/>';
        if ($positionRight) {
            $html .= '<span class="input-group-addon">'.$legend.'</span>';
        }
        $html .= '</div>';

        return $html;
    }
}
