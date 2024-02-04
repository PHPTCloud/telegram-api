<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * @version 1.0.0
 *
 * Этот объект представляет собой тип опроса, который разрешено создавать и отправлять при нажатии соот
 * ветствующей кнопки.
 *
 * @link    https://core.telegram.org/bots/api#keyboardbuttonpolltype
 */
interface KeyboardButtonPollTypeArgumentInterface
{
    /**
     * Необязательный. Если викторина пройдена, пользователю будет разрешено создавать только опросы в режи
     * ме викторины. Если указан параметр regular, будут разрешены только регулярные опросы. В противном сл
     * учае пользователю будет разрешено создать опрос любого типа.
     *
     * @return string|null
     * @see \PHPTCloud\TelegramApi\Type\Enums\PollTypeEnum
     */
    public function getType(): ?string;
}
