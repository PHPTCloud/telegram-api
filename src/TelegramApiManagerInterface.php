<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ChatIdArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ForwardMessageArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\MessageArgumentInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatInterface;
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

    public function getChat(ChatIdArgumentInterface $argument): ChatInterface;
}
