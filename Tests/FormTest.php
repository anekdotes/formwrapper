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

use Anekdotes\FormWrapper\Form;
use PHPUnit_Framework_TestCase;

class FormTest extends PHPUnit_Framework_TestCase
{
    public function testCaseSensitivity()
    {
        $form = new Form();
        $text = $form->text('toaster', 'toaster', [], 'default', 'None');
        $this->assertEquals($text, '<input type="text" name="toaster" value="default" class="form-control"/>');
    }

    public function testCaseSensitivityWithFurthercaps()
    {
        $form = new Form();
        $text = $form->TeXt('toaster', 'toaster', [], 'default', 'None');
        $this->assertEquals($text, '<input type="text" name="toaster" value="default" class="form-control"/>');
    }

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

    public function testFormOpen()
    {
        $form = new Form();
        $text = $form->open('www.test.test', 'put');
        $expected = '<form action="www.test.test" method="post" class="form-horizontal"><input type="hidden" name="_method" value="put" />'."\n";
        $this->assertEquals($text, $expected);
    }

    public function testFormClose()
    {
        $form = new Form();
        $text = $form->close();
        $expected = '</form>';
        $this->assertEquals($text, $expected);
    }
}
