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

use Anekdotes\FormWrapper\Wrappers\SingleEight;
use PHPUnit\Framework\TestCase;

final class SingleEightWrapperTest extends TestCase
{
    public function testSingleEightHandle()
    {
        $wrap = new SingleEight();
        $expected = '<div class="col col-lg-8">input</div>';
        $this->assertEquals($wrap->handle('input', 'title'), $expected);
    }
}
