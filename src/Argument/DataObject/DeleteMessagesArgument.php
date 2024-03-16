<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\DeleteMessagesArgumentInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @link https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/DeleteMessages.md
 */
class DeleteMessagesArgument implements DeleteMessagesArgumentInterface
{
    public function __construct(
        private readonly int|float|string $chatId,
        private readonly array $messageIds,
    ) {
    }

    public function getChatId(): float|int|string
    {
        return $this->chatId;
    }

    public function getMessageIds(): array
    {
        return $this->messageIds;
    }
}
