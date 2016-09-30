<?php
/*
 * This file is part of the Form Wrapper package.
 *
 * (c) Anekdotes Communication inc. <info@anekdotes.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Anekdotes\FormWrapper\Controls;

use Anekdotes\Support\Arr;

/**
 * Wraps a range in a select.
 */
class Rangeselect extends Control
{
    protected $nbParams = 3;

    /**
     * Prepare the input.
     *
     * @param array $arguments Contains the passed arguments
     *                         [0]  string    $name   Field's name, to be used by the form as a key.
     *                         [1]  string[]  $opts   Contains the option="value" key-value pairs to be added to the field
     *                         [2]  string    $default  Contains the field's default value.
     */
    public function prepare($arguments)
    {
        $name = $arguments[0];
        $opts = $arguments[1];
        $default = $arguments[2];

        $start = Arr::get($opts, 'start', 1);
        $end = Arr::get($opts, 'end', 10);
        $step = Arr::get($opts, 'step', 1);
        $inverted = Arr::get($opts, 'inverted', false);
        Arr::remove('start', $opts);
        Arr::remove('end', $opts);
        Arr::remove('step', $opts);
        Arr::remove('inverted', $opts);
        $opts['value'] = 0;
        $opts['key'] = 0;
        $values = [];
        if ($inverted) {
            for ($i = $end; $i >= $start; $i -= $step) {
                $values[] = [$i];
            }
        } else {
            for ($i = $start; $i <= $end; $i += $step) {
                $values[] = [$i];
            }
        }
        $select = new Select();

        return $select->prepare([$name, $values, $opts, [$default], '']);
    }
}
