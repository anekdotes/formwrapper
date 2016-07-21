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

use Anekdotes\FormWrapper\Controls\Text;
use PHPUnit_Framework_TestCase;

class TextControlTest extends PHPUnit_Framework_TestCase
{
    public function testTextPrepare()
    {
        $text = new Text();
        $this->assertEquals($text->prepare(['test',['class' => 'toaster'],'default']), '<input type="text" name="test" value="default" class="toaster"/>');
    }
}
