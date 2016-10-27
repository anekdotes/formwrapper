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

use Anekdotes\FormWrapper\Controls\File;
use PHPUnit_Framework_TestCase;

class FileControlTest extends PHPUnit_Framework_TestCase
{
    public function testFilePrepare()
    {
        $control = new File();
        $expected = '<input type="file" name="test" class="toaster"/>';
        $this->assertEquals($control->prepare(['test', ['class' => 'toaster']]), $expected);
    }
}
