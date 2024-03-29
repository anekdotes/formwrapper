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
 * Doesn't wrap the input in anything.
 */
class LteWrap
{
    public function handle($input)
    {
        return  '<div class="form-group">'.
                    '<label>'.$title.'</label>'.
                    $input.
                '</div>'."\n";
    }
}
