<?php
/**
 * Created by PhpStorm.
 * User: Waldi
 * Date: 16.08.2019
 * Time: 20:55
 */

declare(strict_types = 1);

namespace Patterns\SimpleFactory;

class Bicycle
{
    public function driveTo(string $destination) : string
    {
        return $destination;
    }
}
