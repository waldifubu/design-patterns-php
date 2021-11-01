<?php
/**
 * Created by PhpStorm.
 * User: Waldi
 * Date: 16.08.2019
 * Time: 22:18
 */

declare(strict_types = 1);

namespace Patterns\FactoryMethod;

use JetBrains\PhpStorm\Pure;

class StdoutLoggerFactory implements LoggerFactory
{
    #[Pure] public function createLogger(): Logger
    {
        return new StdoutLogger();
    }
}
