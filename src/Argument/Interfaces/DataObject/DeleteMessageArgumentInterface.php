<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface DeleteMessageArgumentInterface extends ArgumentInterface
{
    public function getChatId(): int|float|string;

    public function getMessageId(): int;
}
