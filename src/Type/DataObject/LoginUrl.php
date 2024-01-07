<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\LoginUrlInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 *
 * Этот объект представляет собой параметр встроенной кнопки клавиатуры, используемой для автоматическо
 * й авторизации пользователя. Служит отличной заменой виджета входа в Telegram, когда пользователь зах
 * одит из Telegram. Все, что пользователю нужно сделать, это нажать кнопку и подтвердить, что он хочет
 * войти в систему.
 * Приложения Telegram поддерживают эти кнопки начиная с версии 5.7.
 *
 * @link    https://core.telegram.org/widgets/login
 * @link    https://core.telegram.org/bots/api#loginurl
 */
class LoginUrl implements LoginUrlInterface
{
    public function __construct(
        private readonly string $url,
        private readonly ?string $forwardText = null,
        private readonly ?string $botUsername = null,
        private readonly ?bool $requestWriteAccess = null,
    ) {}

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
