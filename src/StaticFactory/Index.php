<?php
/**
 * Created by PhpStorm.
 * User: Waldi
 * Date: 16.08.2019
 * Time: 21:40
 */

declare(strict_types=1);

namespace Patterns\StaticFactory;

class Index
{
    public function start(): void
    {
        $number = StaticFactory::factory('number');
        echo 'Object number is instance of: ' . get_class($number);

        echo '<br>';

        $string = StaticFactory::factory('string');
        echo 'Object string is instance of: ' . get_class($string);
    }
}