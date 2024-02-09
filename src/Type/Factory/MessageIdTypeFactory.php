<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Factory;

use PHPTCloud\TelegramApi\Type\DataObject\MessageId;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\MessageIdInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\MessageIdTypeFactoryInterface;

class MessageIdTypeFactory implements MessageIdTypeFactoryInterface
{
    public function create(int $messageId): MessageIdInterface
    {
        return new MessageId($messageId);
    }
}
