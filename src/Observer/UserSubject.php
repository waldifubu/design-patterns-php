<?php
/**
 * Created by PhpStorm.
 * User: Waldi
 * Date: 02.10.2017
 * Time: 18:19
 */

declare(strict_types = 1);

namespace Patterns\Observer;

use SplObjectStorage;
use SplObserver;

class UserSubject implements \SplSubject
{
    /**
     * @var string
     */
    private $email;

    /**
     * @var SplObjectStorage
     */
    private $observers;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function changeEmail(string $email)
    {
        $this->email = $email;
        $this->notify();
    }

    public function notify()
    {
        echo __METHOD__;
        /** @var SplObserver $observer */
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}