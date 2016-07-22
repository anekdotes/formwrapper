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

use Anekdotes\FormWrapper\Wrappers\Wrap;
use PHPUnit_Framework_TestCase;

class WrapWrapperTest extends PHPUnit_Framework_TestCase
{
    public function testWrapHandle()
    {
        $wrap = new Wrap();
        $expected = '<div class="row form-row"><label class="col col-lg-4 form-label">title</label><div class="col col-lg-8">input</div><div class="clearfix"></div></div>'."\n";
        $this->assertEquals($wrap->handle('input', 'title'), $expected);
    }
}
