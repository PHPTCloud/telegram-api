<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 * @version 1.0.0
 *
 * Этот объект представляет собой краткое описание бота.
 * @link    https://core.telegram.org/bots/api#botshortdescription
 */
interface BotShortDescriptionInterface
{
    /**
     * Краткое описание бота.
     *
     * @return string
     */
    public function getShortDescription(): string;
}
