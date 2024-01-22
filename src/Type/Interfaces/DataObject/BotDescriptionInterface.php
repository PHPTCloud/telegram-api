<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 * @version 1.0.0
 *
 * Этот объект представляет описание бота.
 * @link    https://core.telegram.org/bots/api#botdescription
 */
interface BotDescriptionInterface
{
    /**
     * Описание бота.
     *
     * @return string
     */
    public function getDescription(): string;
}
