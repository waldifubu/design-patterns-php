<?php
/**
 * Created by PhpStorm.
 * User: Waldi
 * Date: 02.10.2017
 * Time: 18:26
 */

declare(strict_types = 1);

namespace Patterns\Observer;

use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    public function testChangeInUserLeadsToUserObserverBeingNotified()
    {
        $observer = new UserObserver();

        $user = new UserSubject();
        $user->attach($observer);

        $user->changeEmail('foo@bar.com');
        $this->assertCount(1, $observer->getChangedUsers());
    }
}
