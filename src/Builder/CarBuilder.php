<?php declare(strict_types=1);

namespace Patterns\Builder;


use Patterns\Builder\Parts\Car;
use Patterns\Builder\Parts\Door;
use Patterns\Builder\Parts\Wheel;
use Patterns\Builder\Parts\Engine;
use Patterns\Builder\Parts\AbstractVehicle;

class CarBuilder implements Builder
{
    private Car $car;

    public function addDoors()
    {
        $this->car->setPart('rightDoor', new Door());
        $this->car->setPart('leftDoor', new Door());
        $this->car->setPart('trunkLid', new Door());
    }

    public function addEngine()
    {
        $this->car->setPart('engine', new Engine());
    }

    public function addWheel()
    {
        $this->car->setPart('wheelLF', new Wheel());
        $this->car->setPart('wheelRF', new Wheel());
        $this->car->setPart('wheelLR', new Wheel());
        $this->car->setPart('wheelRR', new Wheel());
    }

    public function createVehicle()
    {
        $this->car = new Car();
    }

    public function getVehicle(): AbstractVehicle
    {
        return $this->car;
    }
}
