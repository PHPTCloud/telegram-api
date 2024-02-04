<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\KeyboardButtonInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\KeyboardButtonRequestUsersInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * @version 1.0.0
 *
 * Этот объект представляет собой одну кнопку клавиатуры ответа. Для простых текстовых кнопок вместо эт
 * ого объекта можно использовать String, чтобы указать текст кнопки. Необязательные поля web_app,
 * request_users, request_chat, request_contact, request_location и request_poll являются
 * взаимоисключающими.
 *
 * Примечание. Параметры request_users и request_chat будут работать только в версиях Telegram, выпущен
 * ных после 3 февраля 2023 г. В старых клиентах будет отображаться неподдерживаемое сообщение.
 *
 * @link    https://core.telegram.org/bots/api#keyboardbutton
 */
class KeyboardButton implements KeyboardButtonInterface
{
    public function __construct(
        private readonly string $text,
        private readonly ?KeyboardButtonRequestUsersInterface $requestUsers = null,
    ) {
    }
}
