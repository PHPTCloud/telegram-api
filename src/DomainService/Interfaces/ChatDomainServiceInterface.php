<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\DomainService\Interfaces;

use PHPTCloud\TelegramApi\Argument\Interfaces\ChatIdArgumentInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\ChatInterface;

/**
 * @author  Пешко Илья peshkoi@mail.ru
 * @version 1.0.0
 */
interface ChatDomainServiceInterface
{
    public function getChat(ChatIdArgumentInterface $argument): ChatInterface;
}
