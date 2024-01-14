<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Enums;

/**
 * @author  Пешко Илья shkoi@mail.ru
 * @version 1.0.0
 */
enum MenuButtonEnum: string
{
    case COMMANDS = 'commands';
    case WEB_APP = 'web_app';
    case DEFAULT = 'default';
}
