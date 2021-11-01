<?php
/**
 * Created by PhpStorm.
 * User: Waldi
 * Date: 02.10.2017
 * Time: 18:19
 */

declare(strict_types=1);

namespace Patterns\Observer;

use SplObjectStorage;
use SplObserver;
use JetBrains\PhpStorm\Pure;

class UserSubject implements \SplSubject
{
    /**
     * @var string
     */
    private string $email;

    /**
     * @var SplObjectStorage
     */
    private SplObjectStorage $observers;

    #[Pure]
    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    public function attach(SplObserver $observer): void
    {
        $this->observers->attach($observer);
        echo "Subject: Attached an observer.<br>";
    }

    public function detach(SplObserver $observer): void
    {
        $this->observers->detach($observer);
        echo "Subject: Detached an observer.<br>";
    }

    public function changeEmail(string $email): void
    {
        echo "Subject: Let's change email...<br>";
        $this->email = $email;
        $this->notify();
    }

    public function notify(): void
    {
        echo "Subject: Notifying observers...<br>";
        echo __METHOD__;
        /** @var SplObserver $observer */
        foreach ($this->observers as $observer) {
            $observer->update($this);
            echo '<br>' . $this->email;
        }
        echo '<br>'.str_repeat('-', 20).'<br>';
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
}