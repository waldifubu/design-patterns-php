<?php
declare (strict_types = 1);

namespace Patterns\FactoryMethod2;

interface FormatInterface
{
    public function convert(): string;
    public function setData(array $data): void;
}
