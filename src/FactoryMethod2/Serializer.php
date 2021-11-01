<?php

namespace Patterns\FactoryMethod2;

class Serializer
{
    /** @var FormatInterface $format */
    private FormatInterface $format;

    public function __construct(FormatInterface $format)
    {
        $this->format = $format;
    }

    public function serialize($data): string
    {
        $this->format->setData($data);

        return $this->format->convert();
    }
}
