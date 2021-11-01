<?php
/**
 * Created by PhpStorm.
 * User: Waldi
 * Date: 02.10.2017
 * Time: 18:19
 */

declare(strict_types=1);

namespace Patterns\Observer;

use SplSubject;

class UserObserverA implements \SplObserver
{
    /**
     * @var UserSubject[]
     */
    private array $changedUsers = [];

    /**
     * It is called by the Subject, usually by SplSubject::notify()
     *
     * @param SplSubject $subject
     */
    public function update(SplSubject $subject): void
    {
        $this->changedUsers[] = clone $subject;
         echo "<br>ConcreteObserverA: Reacted to the event.";
    }

    /**
     * @return UserSubject[]
     */
    public function getChangedUsers(): array
    {
        return $this->changedUsers;
    }
}