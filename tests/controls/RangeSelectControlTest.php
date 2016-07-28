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

use Anekdotes\FormWrapper\Controls\RangeSelect;
use PHPUnit_Framework_TestCase;

class RangeSelectControlTest extends PHPUnit_Framework_TestCase
{
    public function testRangeSelectPrepare()
    {
        $control = new RangeSelect();
        $expected = '<select name="name"  class="form"><option value="1" class="form-option">1</option><option value="2" class="form-option">2</option><option value="3" class="form-option">3</option><option value="4" class="form-option">4</option><option value="5" selected="selected" class="form-option">5</option><option value="6" class="form-option">6</option><option value="7" class="form-option">7</option><option value="8" class="form-option">8</option><option value="9" class="form-option">9</option><option value="10" class="form-option">10</option></select>';
        $opts = [
            'name',
            [
                'class' => 'form',
                'step' => 1,
                'start' => 1,
                'end' => 10,
                'inverted' => false,
            ],
            5,
        ];
        $this->assertEquals($control->prepare($opts), $expected);
    }

    public function testRangeSelectPrepareInverted()
    {
        $control = new RangeSelect();
        $expected = '<select name="name"  class="form"><option value="10" class="form-option">10</option><option value="9" class="form-option">9</option><option value="8" class="form-option">8</option><option value="7" class="form-option">7</option><option value="6" class="form-option">6</option><option value="5" selected="selected" class="form-option">5</option><option value="4" class="form-option">4</option><option value="3" class="form-option">3</option><option value="2" class="form-option">2</option><option value="1" class="form-option">1</option></select>';
        $opts = [
            'name',
            [
                'class' => 'form',
                'step' => 1,
                'start' => 1,
                'end' => 10,
                'inverted' => true,
            ],
            5,
        ];
        $this->assertEquals($control->prepare($opts), $expected);
    }
}
