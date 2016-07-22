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

use Anekdotes\FormWrapper\Controls\Number;
use PHPUnit_Framework_TestCase;

class NumberControlTest extends PHPUnit_Framework_TestCase
{
    public function testNumberPrepare()
    {
        $number = new Number();
        $this->assertEquals($number->prepare(['test', ['class' => 'toaster'], 'default']), '<input type="number" name="test" value="default" class="toaster"/>');
    }
}
