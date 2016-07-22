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

use Anekdotes\FormWrapper\Controls\Blank;
use PHPUnit_Framework_TestCase;

class BlankControlTest extends PHPUnit_Framework_TestCase
{
    public function testLegendTextPrepare()
    {
        $text = new Blank();
        $expected = '<p class="toaster">value</p>';
        $this->assertEquals($text->prepare([['class' => 'toaster'], 'value']), $expected);
    }
}
