<?php
 
declare(strict_types=1);

namespace Patterns\Builder;

class Index {

    public function start()
    {
        // Let's build a truck
        $truckBuilder = new TruckBuilder();
        $newVehicle = (new Director())->build($truckBuilder);
        echo '<pre>'.var_export($newVehicle->getAllParts()).'</pre>';

        echo '<br>';

        // Now let's build a car
        $carBuilder = new CarBuilder();
        $newVehicle = (new Director())->build($carBuilder);
        echo '<pre>'.var_export($newVehicle->getAllParts()).'</pre>';

    }
}