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
 * Wraps a group of radio buttons.
 */
class Radiogroup extends Control
{
    protected $nbParams = 4;

    /**
     * Prepare the input.
     *
     * @param array $arguments Contains the passed arguments
     *                         [0]  string    $name      Radio group's name.
     *                         [1]  Array[]   $elements  Array of radio elements. These must be PHP Arrays which all contain the ["id"] and ["name"] attributes (unless either "key" or "value" are redefined in the opts)
     *                         [2]  string[]  $opts      Contains the option="value" key-value pairs to be added to the field
     *                         [3]  Array[]   $values    Contains the element that needs to be checked (an is in array comparison is made)
     */
    public function prepare($arguments)
    {
        $name = $arguments[0];
        $elements = $arguments[1];
        $opts = $arguments[2];
        $values = $arguments[3];
        $values = (array) $values;
        $hKey = Arr::get($opts, 'key', 'id');
        $hValue = Arr::get($opts, 'value', 'name');
        Arr::remove('key', $opts);
        Arr::remove('value', $opts);
        $html = '';
        foreach ($elements as $element) {
            $html .= '<div class="radio">';
            $html .= '<label>';
            $html .= $element[$hValue];
            $radio = new Radio();
            $html .= $radio->prepare([$name, $element[$hKey], $opts, in_array($element[$hKey], $values)]);
            $html .= '</div>';
            $html .= '</label>';
        }

        return $html;
    }
}
