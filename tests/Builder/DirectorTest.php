<?php
declare(strict_types=1);

namespace Patterns\Test\Builder;

use Patterns\Builder\Director;
use PHPUnit\Framework\TestCase;
use Patterns\Builder\Parts\Car;
use Patterns\Builder\CarBuilder;
use Patterns\Builder\Parts\Truck;
use Patterns\Builder\TruckBuilder;

class DirectorTest extends TestCase
{
    public function testCanBuildTruck()
    {
        $truckBuilder = new TruckBuilder();
        $newVehicle = (new Director())->build($truckBuilder);

        $this->assertInstanceOf(Truck::class, $newVehicle);
    }

    public function testCanBuildCar()
    {
        $carBuilder = new CarBuilder();
        $newVehicle = (new Director())->build($carBuilder);

        $this->assertInstanceOf(Car::class, $newVehicle);
    }
}
