<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * Этот объект представляет собой тип опроса, который разрешено создавать и отправлять при нажатии соот
 * ветствующей кнопки.
 *
 * @see    https://core.telegram.org/bots/api#keyboardbuttonpolltype
 */
interface KeyboardButtonPollTypeInterface
{
    /**
     * Необязательный. Если викторина пройдена, пользователю будет разрешено создавать только опросы в режи
     * ме викторины. Если указан параметр regular, будут разрешены только регулярные опросы. В противном сл
     * учае пользователю будет разрешено создать опрос любого типа.
     *
     * @see \PHPTCloud\TelegramApi\Type\Enums\PollTypeEnum
     */
    public function getType(): ?string;
}
