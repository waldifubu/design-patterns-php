<?php
declare (strict_types = 1);

namespace Patterns\FactoryMethod2;

abstract class AbstractBaseFormat
{
    protected array $data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function setData(array $data): void
    {
        $this->data = $data;
    }

    public abstract function convert(): string;

    public function __toString()
    {
        return $this->convert();
    }
}
