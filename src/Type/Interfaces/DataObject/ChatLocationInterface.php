<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * @version 1.0.0
 *
 * Представляет расположение, к которому подключен чат.
 *
 * @see    https://core.telegram.org/bots/api#chatlocation
 */
interface ChatLocationInterface
{
    /**
     * Местоположение, к которому подключена супергруппа. Не может быть активной локацией.
     */
    public function getLocation(): LocationInterface;

    /**
     * Адрес местонахождения; От 1 до 64 символов по усмотрению владельца чата.
     */
    public function getAddress(): string;
}
