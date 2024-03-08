<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\KeyboardButtonPollTypeInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * Этот объект представляет собой тип опроса, который разрешено создавать и отправлять при нажатии соот
 * ветствующей кнопки.
 *
 * @see    https://core.telegram.org/bots/api#keyboardbuttonpolltype
 */
class KeyboardButtonPollType implements KeyboardButtonPollTypeInterface
{
    public function __construct(
        private readonly ?string $type = null,
    ) {
    }

    public function getType(): ?string
    {
        return $this->type;
    }
}
