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

use Anekdotes\FormWrapper\Wrappers\SingleSix;
use PHPUnit\Framework\TestCase;

final class SingleSixWrapperTest extends TestCase
{
    public function testSingleSixHandle()
    {
        $wrap = new SingleSix();
        $expected = '<div class="col col-lg-6">input</div>';
        $this->assertEquals($wrap->handle('input', 'title'), $expected);
    }
}
