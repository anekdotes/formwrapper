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

use Anekdotes\FormWrapper\Controls\Money;
use PHPUnit_Framework_TestCase;

class MoneyControlTest extends PHPUnit_Framework_TestCase
{
    public function testMoneyPrepare()
    {
        $text = new Money();
        $expected = '<div class="input-group"><span class="input-group-addon">$</span><input type="number" step="any" name="test" value="default" class="toaster"/></div>';
        $this->assertEquals($text->prepare(['test', ['class' => 'toaster'], 'default']), $expected);
    }
}
