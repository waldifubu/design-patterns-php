<?php
declare (strict_types = 1);

namespace Patterns\FactoryMethod2;

class JSON extends AbstractBaseFormat implements FromStringInterface, NamedFormatInterface, FormatInterface
{
    /**
     * @throws \JsonException
     */
    public function convert(): string
    {
        return json_encode($this->data, JSON_THROW_ON_ERROR);
    }

    /**
     * @throws \JsonException
     */
    public function convertFromString($string): mixed
    {
        return json_decode($string, true, 512, JSON_THROW_ON_ERROR);
    }

    public function getName(): string
    {
        return (new \ReflectionClass($this))->getShortName();
    }
}
