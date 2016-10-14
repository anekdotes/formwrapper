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

use Anekdotes\FormWrapper\Controls\Checkbox;
use PHPUnit_Framework_TestCase;

class CheckboxControlTest extends PHPUnit_Framework_TestCase
{
    public function testCheckboxPrepare()
    {
        $control = new Checkbox();
        $expected = '<input type="checkbox" checked name="test" value="tested"  class="toaster">';
        $this->assertEquals($control->prepare(['test', 'tested', ['class' => 'toaster'], 'true']), $expected);
    }
}
