<?php
/**
 * Created by PhpStorm.
 * User: Waldi
 * Date: 16.08.2019
 * Time: 21:37
 */

declare(strict_types = 1);

namespace Patterns\StaticFactory;

interface FormatterInterface
{
    public function format(string $input): string;
}