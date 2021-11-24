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

use Anekdotes\FormWrapper\Wrappers\Two;
use PHPUnit\Framework\TestCase;

final class TwoWrapperTest extends TestCase
{
    public function testTwoHandle()
    {
        $wrap = new Two();
        $expected = '<div class="col col-lg-6"><label class="col col-lg-12 form-label">title</label><div class="col col-lg-12">input</div><div class="clearfix"></div></div>'."\n";
        $this->assertEquals($wrap->handle('input', 'title'), $expected);
    }
}
