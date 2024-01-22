<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\DomainService\Interfaces;

use PHPTCloud\TelegramApi\Argument\Interfaces\MessageArgumentInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\MessageInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 */
interface MessageDomainServiceInterface
{
    /**
     * @param MessageArgumentInterface $argument
     *
     * Используйте этот метод для отправки текстовых сообщений. В случае успеха возвращается
     * Message (https://core.telegram.org/bots/api#message).
     *
     * @return MessageInterface
     * @link https://core.telegram.org/bots/api#sendmessage
     */
    public function sendMessage(MessageArgumentInterface $argument): MessageInterface;
}