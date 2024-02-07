<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ReplyKeyboardRemoveInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Пешко Илья peshkoi@mail.ru
 *
 * @version 1.0.0
 *
 * При получении сообщения с этим объектом клиенты Telegram удалят текущую пользовательскую клавиатуру
 * и отобразят стандартную клавиатуру с буквами. По умолчанию пользовательские клавиатуры отображаются
 * до тех пор, пока бот не отправит новую клавиатуру. Исключение составляют одноразовые клавиатуры,
 * которые скрываются сразу после нажатия пользователем кнопки (см. ReplyKeyboardMarkup).
 *
 * @link https://core.telegram.org/bots/api#replykeyboardremove
 */
class ReplyKeyboardRemove implements ReplyKeyboardRemoveInterface
{
    public function __construct(
        private readonly bool $removeKeyboard = true,
        private readonly ?bool $selective = null,
    ) {
    }

    public function wantRemoveKeyboard(): bool
    {
        return $this->removeKeyboard;
    }

    public function isSelective(): ?bool
    {
        return $this->selective;
    }
}
