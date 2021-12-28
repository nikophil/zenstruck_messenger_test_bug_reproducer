<?php

declare(strict_types=1);

namespace App\Tests;

use App\Messenger\Message;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Messenger\Envelope;
use Zenstruck\Messenger\Test\InteractsWithMessenger;

final class MyTest extends KernelTestCase
{
    use InteractsWithMessenger;

    public function testMessagesAreDispatched(): void
    {
        $transport = $this->messenger('sync');
        $transport->unblock();
        $transport->send(new Envelope(new Message('foo')));
    }
}
