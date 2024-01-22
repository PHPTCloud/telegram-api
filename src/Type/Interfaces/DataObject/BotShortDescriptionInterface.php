<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * @version 1.0.0
 *
 * Этот объект представляет собой краткое описание бота.
 *
 * @see    https://core.telegram.org/bots/api#botshortdescription
 */
interface BotShortDescriptionInterface
{
    /**
     * Краткое описание бота.
     */
    public function getShortDescription(): string;
}
