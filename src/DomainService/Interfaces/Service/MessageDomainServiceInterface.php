<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\DomainService\Interfaces\Service;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ForwardMessageArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\MessageArgumentInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\MessageInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
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
     * @see https://core.telegram.org/bots/api#sendmessage
     */
    public function sendMessage(MessageArgumentInterface $argument): MessageInterface;

    /**
     * Используйте этот метод для пересылки сообщений любого типа. Служебные сообщения и сообщения с защище
     * нным содержимым пересылаться не могут. В случае успеха отправленное сообщение возвращается.
     *
     * @see https://core.telegram.org/bots/api#forwardmessage
     */
    public function forwardMessage(ForwardMessageArgumentInterface $argument): MessageInterface;
}
