<?php

namespace Patterns\Test\StaticFactory;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Patterns\StaticFactory\FormatNumber;
use Patterns\StaticFactory\FormatString;
use Patterns\StaticFactory\StaticFactory;

class IndexTest extends TestCase
{
    public function testCanCreateNumberFormatter(): void
    {
        $this->assertInstanceOf(FormatNumber::class, StaticFactory::factory('number'));
    }

    public function testCanCreateStringFormatter(): void
    {
        $this->assertInstanceOf(FormatString::class, StaticFactory::factory('string'));
    }

    public function testException(): void
    {
        $this->expectException(InvalidArgumentException::class);

        StaticFactory::factory('object');
    }
}