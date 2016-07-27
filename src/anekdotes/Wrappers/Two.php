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
 * Generates a form wrap which allows to display two fields using this wrap on the same row.
 */
class Two
{
    public function handle($input, $title)
    {
        return    '<div class="col col-lg-6">'.
                    '<label class="col col-lg-12 form-label">'.$title.'</label>'.
                    '<div class="col col-lg-12">'.
                        $input.
                    '</div>'.
                    '<div class="clearfix"></div></div>'."\n";
    }
}
