<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

interface GetChatMenuButtonArgumentInterface extends ArgumentInterface
{
    public function getChatId(): int|float|string|null;
}
