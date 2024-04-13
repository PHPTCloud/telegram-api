<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\BotCommandScopeArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\GetMyCommandsArgumentInterface;

class GetMyCommandsArgument implements GetMyCommandsArgumentInterface
{
    public function __construct(
        private readonly ?BotCommandScopeArgumentInterface $scope = null,
        private readonly ?string $languageCode = null,
    ) {
    }

    public function getScope(): ?BotCommandScopeArgumentInterface
    {
        return $this->scope;
    }

    public function getLanguageCode(): ?string
    {
        return $this->languageCode;
    }
}
