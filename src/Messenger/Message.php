<?php

declare(strict_types=1);

namespace App\Messenger;

final class Message
{
    public function __construct(public string $action)
    {
    }
}
