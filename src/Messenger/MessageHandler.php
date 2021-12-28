<?php

declare(strict_types=1);

namespace App\Messenger;

use Symfony\Component\Messenger\Handler\MessageHandlerInterface;
use Symfony\Component\Messenger\MessageBusInterface;

final class MessageHandler implements MessageHandlerInterface
{
    public function __construct(private MessageBusInterface $messageBus)
    {
    }

    public function __invoke(Message $message)
    {
        if ($message->action === 'foo') {
            $this->messageBus->dispatch(new Message('bar'));
        }
    }
}
