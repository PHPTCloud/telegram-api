<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 * @version 1.0.0
 *
 * Этот объект представляет команду бота.
 * @link    https://core.telegram.org/bots/api#botcommand
 */
interface BotCommandInterface
{
    /**
     * Текст команды; 1-32 символа. Может содержать только строчные английские буквы, цифры и подчеркивания.
     *
     * @return string
     */
    public function getCommand(): string;

    /**
     * Описание команды; 1-256 символов.
     *
     * @return string
     */
    public function getDescription(): string;
}
