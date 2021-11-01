<?php
/**
 * Created by PhpStorm.
 * User: Waldi
 * Date: 16.08.2019
 * Time: 22:18
 */

declare(strict_types = 1);

namespace Patterns\FactoryMethod;


interface LoggerFactory
{
    public function createLogger(): Logger;
}
