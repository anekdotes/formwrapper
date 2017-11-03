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

use Anekdotes\FormWrapper\Controls\Select;
use PHPUnit_Framework_TestCase;

class SelectControlTest extends PHPUnit_Framework_TestCase
{
    public function testSelectPrepare()
    {
        $control = new Select();
        $expected = '<select name="group"  class="toaster"><option value="" class="form-option">PlaceHolder</option><option value="1" selected="selected" class="form-option">toaster</option><option value="2" class="form-option">active</option><option value="3" class="form-option">help</option></select>';
        $opts = [
            'group',
            [
                ['id' => 1, 'name' => 'toaster'],
                ['id' => 2, 'name' => 'active'],
                ['id' => 3, 'name' => 'help'],
            ],
            ['class' => 'toaster'],
            [
                1,
            ],
            'PlaceHolder',
        ];
        $this->assertEquals($control->prepare($opts), $expected);
    }

    public function testSelectPrepareTwo()
    {
        $control = new Select();
        $expected = '<select name="group"  class="toaster"><option value="" class="form-option">PlaceHolder</option><option value="1" selected="selected" class="form-option">ca - toaster</option><option value="2" class="form-option">ca - active</option><option value="3" class="form-option">ca - help</option></select>';
        $opts = [
            'group',
            [
                ['id' => 1, 'name' => 'toaster', 'country' => 'ca'],
                ['id' => 2, 'name' => 'active', 'country' => 'ca'],
                ['id' => 3, 'name' => 'help', 'country' => 'ca'],
            ],
            ['class' => 'toaster', 'value' => 'country|name'],
            [
                1,
            ],
            'PlaceHolder',
        ];
        $this->assertEquals($control->prepare($opts), $expected);
    }
}
