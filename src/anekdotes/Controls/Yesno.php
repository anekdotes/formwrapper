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
 * Wraps two radio buttons in a group.
 */
class Yesno extends Control
{
    protected $nbParams = 3;

    /**
     * Prepare the input.
     *
     * @param array $arguments Contains the passed arguments
     *                         [0]  string    $name     Radio's name. Can be not unique, but will bind it to a group if not.
     *                         [1]  string[]  $opts     Contains the option="value" key-value pairs to be added to the field
     *                         [2]  boolean   $yes      If the yes Radio is checked as default
     */
    public function prepare($arguments)
    {
        $name = $arguments[0];
        $opts = $arguments[1];
        $yes = $arguments[2];
        $yesLang = Arr::get($opts, 'yes', 'Yes');
        $noLang = Arr::get($opts, 'no', 'No');
        Arr::remove('yes', $opts);
        Arr::remove('no', $opts);
        $html = '<div class="radio"><label>';
        $radio = new Radio();
        $html .= $radio->prepare([$name, '1', $opts, $yes]);
        $html .= $yesLang.'</label></div>';

        $html .= '<div class="radio"><label>';
        $radio = new Radio();
        $html .= $radio->prepare([$name, '0', $opts, !$yes]);
        $html .= $noLang.'</label></div>';

        return $html;
    }
}
