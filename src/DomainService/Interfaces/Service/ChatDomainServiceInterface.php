<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\DomainService\Interfaces\Service;

use PHPTCloud\TelegramApi\Argument\Interfaces\ChatIdArgumentInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\ChatInterface;

/**
 * @author  Пешко Илья peshkoi@mail.ru
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 */
interface ChatDomainServiceInterface
{
    /**
     * @param ChatIdArgumentInterface $argument
     *
     * Используйте этот метод, чтобы получать актуальную информацию о чате. Возвращает объект Chat в случае
     * успеха.
     *
     * @return ChatInterface
     *
     * @link https://core.telegram.org/bots/api#getchat
     * @link https://core.telegram.org/bots/api#chat
     */
    public function getChat(ChatIdArgumentInterface $argument): ChatInterface;
}
