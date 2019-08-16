<?php
/**
 * Created by PhpStorm.
 * User: Waldi
 * Date: 25.06.2017
 * Time: 22:10
 */

declare(strict_types=1);

namespace Patterns\Observer;

class Index
{
    public function start()
    {
        $observer = new UserObserver();
        $observer2 = new UserObserver();

        $user = new UserSubject();

        // First
        $user->attach($observer);

        // Second
        $user->attach($observer2);

        $user->changeEmail('foo@bar.com');
        echo count($observer->getChangedUsers());
        echo count($observer2->getChangedUsers());
    }
}