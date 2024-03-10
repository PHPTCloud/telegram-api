<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * Этот объект представляет имя бота.
 *
 * @see    https://core.telegram.org/bots/api#botname
 */
interface BotNameInterface
{
    /**
     * Название бота.
     */
    public function getName(): string;
}
