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
    /**
     * Observer pattern init file
     */
    public function start(): void
    {
        $userObserverA = new UserObserverA();
        $userObserverB = new UserObserverB();

        $userSubject = new UserSubject();

        // First
        $userSubject->attach($userObserverA);

        // Second
        $userSubject->attach($userObserverB);

        $userSubject->changeEmail('foo@bar.com');
        $userSubject->detach($userObserverA);

        $userSubject->changeEmail('foo@bar.com');

    }
}