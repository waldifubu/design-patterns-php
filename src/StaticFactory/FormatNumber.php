<?php
/**
 * Created by PhpStorm.
 * User: Waldi
 * Date: 16.08.2019
 * Time: 21:39
 */

declare(strict_types = 1);

namespace Patterns\StaticFactory;


class FormatNumber implements FormatterInterface
{
    public function format(string $input): string
    {
        return number_format((int) $input);
    }
}
