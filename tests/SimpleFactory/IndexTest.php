<?php

namespace Patterns\Test\SimpleFactory;

use PHPUnit\Framework\TestCase;
use Patterns\SimpleFactory\Bicycle;
use Patterns\SimpleFactory\SimpleFactory;

class IndexTest extends TestCase
{
    public function testCanCreateBicycle()
    {
        $bicycle = (new SimpleFactory())->createBicycle();
        $this->assertInstanceOf(Bicycle::class, $bicycle);
    }
}