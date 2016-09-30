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

use Anekdotes\FormWrapper\Controls\Yesno;
use PHPUnit_Framework_TestCase;

class YesnoControlTest extends PHPUnit_Framework_TestCase
{
    public function testYesnoPrepare()
    {
        $control = new Yesno();
        $expected = '<div class="radio"><label><input type="radio" checked name="test" value="1"  class="toaster">maybe</label></div><div class="radio"><label><input type="radio" name="test" value="0"  class="toaster">No</label></div>';
        $this->assertEquals($control->prepare(['test', ['class' => 'toaster', 'yes' => 'maybe'], true]), $expected);
    }
}
