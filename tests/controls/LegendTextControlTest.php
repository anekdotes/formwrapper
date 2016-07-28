<?php
/*
 * This file is part of the Form Wrapper package.
 *
 * (c) Anekdotes Communication inc. <info@anekdotes.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests;

use Anekdotes\FormWrapper\Controls\LegendText;
use PHPUnit_Framework_TestCase;

class LegendTextControlTest extends PHPUnit_Framework_TestCase
{
    public function testLegendTextPrepare()
    {
        $text = new LegendText();
        $expected = '<div class="input-group"><span class="input-group-addon">legend</span><input type="text" name="test" value="default" class="toaster"/></div>';
        $this->assertEquals($text->prepare(['test', ['class' => 'toaster'], 'default', 'legend']), $expected);
    }

    public function testLegendTextPrepareRight()
    {
        $text = new LegendText();
        $expected = '<div class="input-group"><input type="text" name="test" value="default" class="toaster"/><span class="input-group-addon">legend</span></div>';
        $this->assertEquals($text->prepare(['test', ['class' => 'toaster', 'position' => 'right'], 'default', 'legend']), $expected);
    }
}
