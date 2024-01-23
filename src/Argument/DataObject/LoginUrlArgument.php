<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\LoginUrlArgumentInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 */
class LoginUrlArgument implements LoginUrlArgumentInterface
{
    public function __construct(
        private readonly string $url,
        private readonly ?string $forwardText = null,
        private readonly ?string $botUsername = null,
        private readonly ?bool $requestWriteAccess = null,
    ) {
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getForwardText(): ?string
    {
        return $this->forwardText;
    }

    public function getBotUsername(): ?string
    {
        return $this->botUsername;
    }

    public function wantRequestWriteAccess(): ?bool
    {
        return $this->requestWriteAccess;
    }
}
