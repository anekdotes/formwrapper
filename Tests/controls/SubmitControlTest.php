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

use Anekdotes\FormWrapper\Controls\Submit;
use PHPUnit\Framework\TestCase;

final class SubmitControlTest extends TestCase
{
    public function testSubmitTextPrepare()
    {
        $text = new Submit();
        $expected = '<input type="submit" value="test" class="toaster"/>';
        $this->assertEquals($text->prepare(['test', ['class' => 'toaster']]), $expected);
    }
}
