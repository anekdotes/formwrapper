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
 * Contains basic control generation functions.
 */
abstract class Control
{
    protected $nbParams = 0;
  
    /**
     * Generates the option + values in the provided field. Ex : id="name".
     *
     * @param string[] $opts Array containg the values to put in the field
     *
     * @return string The encoded HTML field with the option="value".
     */
    public function getOpts($opts)
    {
        $html = '';
        if (!array_key_exists('class', $opts)) {
            $opts['class'] = 'form-control';
        }
        foreach ($opts as $key => $value) {
            $html .= " $key=\"$value\"";
        }

        return $html;
    }

    public function getNbParams(){
        return $this->nbParams;
    }

    abstract public function prepare($arguments);
}
