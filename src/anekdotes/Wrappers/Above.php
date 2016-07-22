<?php
/*
 * This file is part of the Logger package.
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
class Above
{
    public function handle($input, $title)
    {
        return  '<div class="row form-row">'.
                    '<div class="col-lg-12"><label>'.$title.'</label></div>'.
                    '<div class="col-lg-12">'.
                        $input.
                    '</div>'.
                    '<div class="clearfix"></div>'.
                '</div>'."\n";
    }
}
