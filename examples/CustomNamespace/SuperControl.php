<?php

namespace CustomNamespace;

use Anekdotes\FormWrapper\Controls\Control;

class SuperControl extends Control
{
    protected $nbParams = 2;

    public function prepare($arguments)
    {
        $content = $arguments[0];
        $class = $arguments[1];
        $html = "<input type='text' value='".$content."' name='super'";
        $html .= $this->getOpts($class);
        $html .= '/>';

        return $html;
    }
}
