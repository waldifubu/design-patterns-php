<?php declare(strict_types=1);

namespace Patterns\Builder;

use Patterns\Builder\Parts\AbstractVehicle;

interface Builder
{
    public function createVehicle();

    public function addWheel();

    public function addEngine();

    public function addDoors();

    public function getVehicle(): AbstractVehicle;
}
