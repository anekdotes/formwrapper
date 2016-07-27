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
 * Generates a form wrap around the provided fields,
 */
class Small
{
    public function handle($input, $title)
    {
        return '<label class="col col-lg-4 form-label">'.$title.'</label>'.
               '<div class="col col-lg-4">'.
                   $input.
               '</div>';
    }
}
