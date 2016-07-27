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
 * Wraps the provided fields in a 8 wide column.
 */
class SingleEight
{
    public function handle($input)
    {
        return  '<div class="col col-lg-8">'.
                    $input.
                '</div>';
    }
}
