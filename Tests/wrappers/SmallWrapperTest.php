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

use Anekdotes\FormWrapper\Wrappers\Small;
use PHPUnit_Framework_TestCase;

class SmallWrapperTest extends PHPUnit_Framework_TestCase
{
    public function testSmallHandle()
    {
        $wrap = new Small();
        $expected = '<label class="col col-lg-4 form-label">title</label><div class="col col-lg-4">input</div>';
        $this->assertEquals($wrap->handle('input', 'title'), $expected);
    }
}
