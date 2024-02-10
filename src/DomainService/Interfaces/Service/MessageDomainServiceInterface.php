<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\DomainService\Interfaces\Service;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\CopyMessageArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\CopyMessagesArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ForwardMessageArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ForwardMessagesArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\MessageArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SendPhotoArgumentInterface;
use PHPTCloud\TelegramApi\Type\DataObject\MessageId;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\MessageIdInterface;
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

    /**
     * Используйте этот метод для пересылки нескольких сообщений любого типа. Если некоторые из указанных с
     * ообщений не удается найти или переслать, они пропускаются. Служебные сообщения и сообщения с защищен
     * ным содержимым пересылаться не могут. Группировка альбомов сохраняется для пересылаемых сообщений. В
     * случае успеха возвращается массив MessageId отправленных сообщений.
     *
     * @see https://core.telegram.org/bots/api#forwardmessages
     *
     * @return MessageIdInterface[]
     */
    public function forwardMessages(ForwardMessagesArgumentInterface $argument, bool $sortIds = false): array;

    /**
     * Используйте этот метод для копирования сообщений любого типа. Служебные сообщения, сообщения о розыг
     * рышах, сообщения о победителях розыгрышей и сообщения о счетах не могут быть скопированы. Опрос викт
     * орины можно скопировать только в том случае, если боту известно значение поля correct_option_id. Мет
     * од аналогичен методу forwardMessage, но скопированное сообщение не имеет ссылки на исходное сообщени
     * е. Возвращает MessageId отправленного сообщения в случае успеха.
     *
     * @see https://core.telegram.org/bots/api#copymessage
     */
    public function copyMessage(CopyMessageArgumentInterface $argument): MessageId;

    /**
     * Используйте этот метод для копирования сообщений любого типа. Если некоторые из указанных сообщений
     * невозможно найти или скопировать, они пропускаются. Служебные сообщения, сообщения о розыгрышах, соо
     * бщения о победителях розыгрышей и сообщения о счетах не могут быть скопированы. Опрос викторины можн
     * о скопировать только в том случае, если значение поля Correct_option_id известно боту. Метод аналоги
     * чен методу forwardMessages, но скопированные сообщения не имеют ссылки на исходное сообщение. Группи
     * ровка альбомов сохраняется для скопированных сообщений. В случае успеха возвращается массив MessageI
     * d отправленных сообщений.
     *
     * @see https://core.telegram.org/bots/api#copymessages
     *
     * @return MessageIdInterface[]
     */
    public function copyMessages(CopyMessagesArgumentInterface $argument, bool $sortIds = false): array;

    /**
     * Используйте этот метод для отправки фотографий. В случае успеха отправленное сообщение возвращается.
     *
     * @see https://core.telegram.org/bots/api#sendphoto
     */
    public function sendPhoto(SendPhotoArgumentInterface $argument): MessageInterface;
}
