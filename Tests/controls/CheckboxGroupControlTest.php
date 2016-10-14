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

use Anekdotes\FormWrapper\Controls\Checkboxgroup;
use PHPUnit_Framework_TestCase;

class CheckboxGroupControlTest extends PHPUnit_Framework_TestCase
{
    public function testCheckboxgroupPrepare()
    {
        $control = new Checkboxgroup();
        $expected = '<div class="checkbox"><label>toaster<input type="checkbox" checked name="group" value="1"  class="toaster"></div></label><div class="checkbox"><label>active<input type="checkbox" name="group" value="2"  class="toaster"></div></label><div class="checkbox"><label>help<input type="checkbox" checked name="group" value="3"  class="toaster"></div></label>';
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
                3,
          ],
        ];
        $this->assertEquals($control->prepare($opts), $expected);
    }
}
