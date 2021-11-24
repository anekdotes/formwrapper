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

use Anekdotes\FormWrapper\Controls\Radio;
use PHPUnit\Framework\TestCase;

final class RadioControlTest extends TestCase
{
    public function testRadioPrepare()
    {
        $control = new Radio();
        $expected = '<input type="radio" checked name="test" value="tested"  class="toaster">';
        $this->assertEquals($control->prepare(['test', 'tested', ['class' => 'toaster'], 'true']), $expected);
    }
}
