<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

/**
 * @author  Пешко Илья peshkoi@mail.ru
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 */
interface SetChatTitleArgumentInterface extends ArgumentInterface, ChatIdArgumentInterface
{
    /**
     * Новое название чата, 1–128 символов.
     */
    public function getTitle(): string;
}
