<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\MenuButtonCommandsArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\MenuButtonDefaultArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\MenuButtonWebAppArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetChatMenuButtonArgumentInterface;

class SetChatMenuButtonArgument implements SetChatMenuButtonArgumentInterface
{
    public function __construct(
        private readonly int|float|string|null $chatId,
        private readonly MenuButtonWebAppArgumentInterface
                        |MenuButtonCommandsArgumentInterface
                        |MenuButtonDefaultArgumentInterface $menuButton,
    ) {
    }

    public function getChatId(): float|int|string|null
    {
        return $this->chatId;
    }

    public function getMenuButton(): MenuButtonDefaultArgumentInterface|MenuButtonCommandsArgumentInterface|MenuButtonWebAppArgumentInterface
    {
        return $this->menuButton;
    }
}
