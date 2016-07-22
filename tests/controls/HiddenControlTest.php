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

use Anekdotes\FormWrapper\Controls\Hidden;
use PHPUnit_Framework_TestCase;

class HiddenControlTest extends PHPUnit_Framework_TestCase
{
    public function testHiddenPrepare()
    {
        $control = new Hidden();
        $expected = '<input type="hidden" name="test" value="tested" class="toaster"/>';
        $this->assertEquals($control->prepare(['test', ['class' => 'toaster'], 'tested']), $expected);
    }
}
