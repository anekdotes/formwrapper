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

use Anekdotes\FormWrapper\Controls\Label;
use PHPUnit_Framework_TestCase;

class LabelControlTest extends PHPUnit_Framework_TestCase
{
    public function testLabelPrepare()
    {
        $label = new Label();
        $this->assertEquals($label->prepare(['test', ['class' => 'toaster']]), '<label  class="toaster">test</label>');
    }
}
