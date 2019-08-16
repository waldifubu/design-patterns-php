<?php
/**
 * Created by PhpStorm.
 * User: Waldi
 * Date: 16.08.2019
 * Time: 21:10
 */

declare(strict_types=1);

namespace Patterns\SimpleFactory;

class Index
{
    public function start()
    {
        $factory = new SimpleFactory();
        $bicycle = $factory->createBicycle();

        // Works, too:
        $bicycle2 = (new SimpleFactory())->createBicycle();

        echo $bicycle->driveTo('Paris');
    }
}