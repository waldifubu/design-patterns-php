<?php
/**
 * Created by PhpStorm.
 * User: Waldi
 * Date: 02.10.2017
 * Time: 18:19
 */

declare(strict_types = 1);

namespace Patterns\Observer;

use SplSubject;

class UserObserver implements \SplObserver
{
    /**
     * @var UserSubject[]
     */
    private $changedUsers = [];

    /**
     * It is called by the Subject, usually by SplSubject::notify()
     *
     * @param SplSubject $subject
     */
    public function update(SplSubject $subject)
    {
        $this->changedUsers[] = clone $subject;
    }

    /**
     * @return UserSubject[]
     */
    public function getChangedUsers(): array
    {
        return $this->changedUsers;
    }
}