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

use Anekdotes\FormWrapper\Form;
use PHPUnit_Framework_TestCase;

class FormTest extends PHPUnit_Framework_TestCase
{
    public function testIntegrationForm()
    {
        $form = new Form();
        $text = $form->Text('toaster', 'toaster', [], 'default', 'None');
        $this->assertEquals($text, '<input type="text" name="toaster" value="default" class="form-control"/>');
    }

    public function testIntegartionWithNoWrapper()
    {
        $form = new Form();
        $text = $form->Text('toaster', 'toaster', [], 'default');
        $this->assertEquals($text, '<input type="text" name="toaster" value="default" class="form-control"/>');
    }
}
