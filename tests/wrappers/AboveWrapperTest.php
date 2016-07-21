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

use Anekdotes\FormWrapper\Wrappers\Above;
use PHPUnit_Framework_TestCase;

class AboveWrapperTest extends PHPUnit_Framework_TestCase
{
    public function testAboveHandle()
    {
        $above = new Above();
        $expected = '<div class="row form-row"><div class="col-lg-12"><label>title</label></div><div class="col-lg-12">input</div><div class="clearfix"></div></div>'."\n";
        $this->assertEquals($above->handle('title', 'input'), $expected);
    }
}
