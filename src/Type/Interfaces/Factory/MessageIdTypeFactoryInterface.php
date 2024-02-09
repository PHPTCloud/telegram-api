<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\Factory;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\MessageIdInterface;

interface MessageIdTypeFactoryInterface extends TypeFactoryInterface
{
    public function create(int $messageId): MessageIdInterface;
}
