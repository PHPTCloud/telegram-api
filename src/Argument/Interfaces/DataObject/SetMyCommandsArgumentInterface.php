<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

interface SetMyCommandsArgumentInterface extends ArgumentInterface
{
    /**
     * @return BotCommandArgumentInterface[]
     */
    public function getCommands(): array;

    public function getScope(): ?BotCommandScopeArgumentInterface;

    public function getLanguageCode(): ?string;
}
