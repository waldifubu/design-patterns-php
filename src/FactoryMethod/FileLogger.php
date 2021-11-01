<?php
/**
 * Created by PhpStorm.
 * User: Waldi
 * Date: 16.08.2019
 * Time: 22:17
 */

declare(strict_types = 1);

namespace Patterns\FactoryMethod;


class FileLogger implements Logger
{
    /**
     * @var string
     */
    private $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    public function log(string $message)
    {
        file_put_contents($this->filePath, $message . PHP_EOL, FILE_APPEND);
    }
}
