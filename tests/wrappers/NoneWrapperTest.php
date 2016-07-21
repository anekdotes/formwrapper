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

use Anekdotes\FormWrapper\Wrappers\None;
use PHPUnit_Framework_TestCase;

class NoneWrapperTest extends PHPUnit_Framework_TestCase
{
    public function testNoneHandle()
    {
        $none = new None();
        $this->assertEquals($none->handle('title','input'), 'input');
    }
}
