<?php
/**
 * Created by PhpStorm.
 * User: Waldi
 * Date: 16.08.2019
 * Time: 22:16
 */

declare(strict_types = 1);

namespace Patterns\StandardFactory;


interface Logger
{
    public function log(string $message);
}