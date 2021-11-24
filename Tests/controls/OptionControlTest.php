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

use Anekdotes\FormWrapper\Controls\Option;
use PHPUnit\Framework\TestCase;

final class OptionControlTest extends TestCase
{
    public function testOptionPrepare()
    {
        $control = new Option();
        $expected = '<option value="tested" selected="selected" class="toaster">test</option>';
        $this->assertEquals($control->prepare(['test', 'tested', ['class' => 'toaster'], true]), $expected);
    }
}
