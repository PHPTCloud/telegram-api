<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

interface SetChatMenuButtonArgumentInterface
{
    public function getChatId(): int|float|string|null;

    public function getMenuButton(): MenuButtonWebAppArgumentInterface|MenuButtonCommandsArgumentInterface|MenuButtonDefaultArgumentInterface|null;
}
