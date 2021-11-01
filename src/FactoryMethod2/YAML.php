<?php
declare (strict_types = 1);

namespace Patterns\FactoryMethod2;

use ReflectionClass;

class YAML extends AbstractBaseFormat implements NamedFormatInterface, FormatInterface
{
    public function convert(): string
    {
        $result = '';

        foreach ($this->data as $key => $value) {
            $result .= $key . ':' . $value . PHP_EOL;
        }

        return $result;
    }

    public function getName(): string
    {
        return (new ReflectionClass($this))->getShortName();
    }
}
