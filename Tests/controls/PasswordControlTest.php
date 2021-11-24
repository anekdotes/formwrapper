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

use Anekdotes\FormWrapper\Controls\Password;
use PHPUnit\Framework\TestCase;

final class PasswordControlTest extends TestCase
{
    public function testPasswordPrepare()
    {
        $text = new Password();
        $this->assertEquals($text->prepare(['test', ['class' => 'toaster'], 'default']), '<input type="password" name="test" value="default" class="toaster"/>');
    }
}
