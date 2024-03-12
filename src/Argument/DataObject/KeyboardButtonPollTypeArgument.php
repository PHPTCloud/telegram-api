<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\KeyboardButtonPollTypeArgumentInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * Этот объект представляет собой тип опроса, который разрешено создавать и отправлять при нажатии соот
 * ветствующей кнопки.
 *
 * @see    https://core.telegram.org/bots/api#keyboardbuttonpolltype
 */
class KeyboardButtonPollTypeArgument implements KeyboardButtonPollTypeArgumentInterface
{
    public function __construct(
        private readonly string $type = '',
    ) {
    }

    public function getType(): string
    {
        return $this->type;
    }
}
