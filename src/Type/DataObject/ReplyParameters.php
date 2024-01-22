<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\ReplyParametersInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 *
 * Описывает параметры ответа для отправляемого сообщения.
 * @link    https://core.telegram.org/bots/api#replyparameters
 */
class ReplyParameters implements ReplyParametersInterface
{
    public function __construct(
        private readonly int|float $messageId,
        private readonly int|float|string|null $chatId = null,
        private readonly ?bool $allowedSendingWithoutReply = null,
    ) {}
}
