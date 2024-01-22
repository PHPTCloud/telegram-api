<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 * @version 1.0.0
 *
 * Этот объект представляет имя бота.
 * @link    https://core.telegram.org/bots/api#botname
 */
interface BotNameInterface
{
    /**
     * Название бота.
     *
     * @return string
     */
    public function getName(): string;
}
