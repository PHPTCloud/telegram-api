<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Enums\MenuButtonEnum;
use PHPTCloud\TelegramApi\Type\Interfaces\MenuButtonWebAppInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\WebAppInfoInterface;

/**
 * @author Пешко Илья peshkoi@mail.ru
 * @version 1.0.0
 *
 * Предоставляет кнопку меню, которая запускает веб-приложение.
 * @link https://core.telegram.org/bots/api#menubuttonwebapp
 */
class MenuButtonWebApp implements MenuButtonWebAppInterface
{
    public function __construct(
        private readonly string $text,
        private readonly WebAppInfoInterface $webApp,
    ) {}

    public function getType(): string
    {
        return MenuButtonEnum::WEB_APP->value;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getWebApp(): WebAppInfoInterface
    {
        return $this->webApp;
    }
}
