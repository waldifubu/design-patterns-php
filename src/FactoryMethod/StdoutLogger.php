<?php
/**
 * Created by PhpStorm.
 * User: Waldi
 * Date: 16.08.2019
 * Time: 22:17
 */

declare(strict_types = 1);

namespace Patterns\FactoryMethod;


class StdoutLogger implements Logger
{
    public function log(string $message)
    {
        echo $message;
    }
}
