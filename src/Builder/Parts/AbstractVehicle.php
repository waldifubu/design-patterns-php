<?php declare(strict_types=1);

namespace Patterns\Builder\Parts;

abstract class AbstractVehicle
{
    /**
     * @var object[]
     */
    private array $data = [];

    public function setPart(string $key, object $value): void
    {
        $this->data[$key] = $value;
    }

    /**
     * @return object[]
     */
    public function getAllParts(): array
    {
        return $this->data;
    }
}
