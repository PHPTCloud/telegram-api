<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ChatIdArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\CopyMessageArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\CopyMessagesArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ForwardMessageArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ForwardMessagesArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\MessageArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SendAudioArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SendChatActionArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SendDocumentArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SendPhotoArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SendVideoArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetChatPhotoArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetChatTitleArgumentInterface;
use PHPTCloud\TelegramApi\Type\DataObject\MessageId;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\MessageIdInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\MessageInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\UserInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 */
interface TelegramApiManagerInterface
{
    public const TELEGRAM_API_HOST = 'https://api.telegram.org';

    public function getBot(): TelegramBotInterface;

    public function setTelegramApiHost(string $host): void;

    public function getMe(): UserInterface;

    public function logOut(): bool;

    public function close(): bool;

    public function sendMessage(MessageArgumentInterface $argument): MessageInterface;

    public function forwardMessage(ForwardMessageArgumentInterface $argument): MessageInterface;

    /**
     * @return MessageIdInterface[]
     */
    public function forwardMessages(ForwardMessagesArgumentInterface $argument, bool $sortIds = false): array;

    public function copyMessage(CopyMessageArgumentInterface $argument): MessageId;

    public function copyMessages(CopyMessagesArgumentInterface $argument, bool $sortIds = false): array;

    public function sendPhoto(SendPhotoArgumentInterface $argument): MessageInterface;

    public function sendAudio(SendAudioArgumentInterface $argument): MessageInterface;

    public function sendDocument(SendDocumentArgumentInterface $argument): MessageInterface;

    public function sendVideo(SendVideoArgumentInterface $argument): MessageInterface;

    public function getChat(ChatIdArgumentInterface $argument): ChatInterface;

    public function sendChatAction(SendChatActionArgumentInterface $argument): bool;

    public function setChatPhoto(SetChatPhotoArgumentInterface $argument): bool;

    public function leaveChat(ChatIdArgumentInterface $argument): bool;

    public function setChatTitle(SetChatTitleArgumentInterface $argument): bool;
}
