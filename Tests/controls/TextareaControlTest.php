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

use Anekdotes\FormWrapper\Controls\Textarea;
use PHPUnit\Framework\TestCase;

final class TextareaControlTest extends TestCase
{
    public function testTextareaPrepare()
    {
        $control = new Textarea();
        $expected = '<textarea name="test"  class="toaster">tested</textarea>';
        $this->assertEquals($control->prepare(['test', ['class' => 'toaster'], 'tested']), $expected);
    }
}
