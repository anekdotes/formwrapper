<?php
/*
 * This file is part of the Logger package.
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
}
