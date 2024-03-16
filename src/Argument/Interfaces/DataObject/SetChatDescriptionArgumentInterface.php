<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

/**
 * @author  Пешко Илья peshkoi@mail.ru
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface SetChatDescriptionArgumentInterface extends ArgumentInterface, ChatIdArgumentInterface
{
    /**
     * Новое описание чата, 0-255 символов.
     */
    public function getDescription(): string;
}
