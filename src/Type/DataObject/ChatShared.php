<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatSharedInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * Этот объект содержит информацию о чате, идентификатор которого был передан боту с помощью кнопки
 * KeyboardButtonRequestChat.
 *
 * @see    https://core.telegram.org/bots/api#chatshared
 */
class ChatShared implements ChatSharedInterface
{
    public function __construct(
        private readonly int|float $requestId,
        private readonly int|float $chatId,
    ) {
    }

    public function getRequestId(): float|int
    {
        return $this->requestId;
    }

    public function getChatId(): float|int
    {
        return $this->chatId;
    }
}
