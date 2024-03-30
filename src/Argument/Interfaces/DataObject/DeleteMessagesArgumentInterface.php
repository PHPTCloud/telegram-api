<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @see https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/DeleteMessages.md
 */
interface DeleteMessagesArgumentInterface extends ArgumentInterface
{
    public function getChatId(): int|float|string;

    public function getMessageIds(): array;
}
