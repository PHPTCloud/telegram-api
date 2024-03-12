<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReplyKeyboardRemoveArgumentInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Пешко Илья peshkoi@mail.ru
 *
 * При получении сообщения с этим объектом клиенты Telegram удалят текущую пользовательскую клавиатуру
 * и отобразят стандартную клавиатуру с буквами. По умолчанию пользовательские клавиатуры отображаются
 * до тех пор, пока бот не отправит новую клавиатуру. Исключение составляют одноразовые клавиатуры,
 * которые скрываются сразу после нажатия пользователем кнопки (см. ReplyKeyboardMarkup).
 *
 * @see https://core.telegram.org/bots/api#replykeyboardremove
 */
class ReplyKeyboardRemoveArgument implements ReplyKeyboardRemoveArgumentInterface
{
    public function __construct(
        private readonly bool $removeKeyboard = true,
        private readonly ?bool $selective = null,
    ) {
    }

    public function isSelective(): ?bool
    {
        return $this->selective;
    }

    public function wantRemoveKeyboard(): bool
    {
        return $this->removeKeyboard;
    }
}
