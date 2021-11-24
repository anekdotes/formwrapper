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

use Anekdotes\FormWrapper\Wrappers\SingleFour;
use PHPUnit\Framework\TestCase;

final class SingleFourWrapperTest extends TestCase
{
    public function testSingleFourHandle()
    {
        $wrap = new SingleFour();
        $expected = '<div class="col col-lg-4">input</div>';
        $this->assertEquals($wrap->handle('input', 'title'), $expected);
    }
}
