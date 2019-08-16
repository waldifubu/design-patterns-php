<?php
/**
 * Created by PhpStorm.
 * User: Waldi
 * Date: 16.08.2019
 * Time: 22:15
 */

declare(strict_types = 1);

namespace Patterns\StandardFactory;

class Index
{
    public function start() {
        $loggerFactory = new StdoutLoggerFactory();
        $logger = $loggerFactory->createLogger();
        echo get_class($logger);

        echo '<br>';

        $loggerFactory = new FileLoggerFactory(sys_get_temp_dir());
        $logger = $loggerFactory->createLogger();
        echo get_class($logger);
    }
}
