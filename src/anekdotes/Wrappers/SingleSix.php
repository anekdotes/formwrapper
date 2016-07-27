<?php
/*
 * This file is part of the Form Wrapper package.
 *
 * (c) Anekdotes Communication inc. <info@anekdotes.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Anekdotes\FormWrapper\Wrappers;

/**
 * Wraps the provided fields in a 6 wide column.
 */
class SingleSix
{
    public function handle($input)
    {
        return  '<div class="col col-lg-6">'.
                    $input.
                '</div>';
    }
}
