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
 * Generates a form wrap following using an extended row for the label+field.
 */
class RowExtended
{
    public function handle($input, $title)
    {
        return  '<div class="row form-row extended">'.
                    '<label class="col col-lg-4 form-label">'.$title.'</label>'.
                    '<div class="col col-lg-8">'.
                        $input.
                    '</div>'.
                    '<div class="clearfix"></div>'.
                '</div>'."\n";
    }
}
