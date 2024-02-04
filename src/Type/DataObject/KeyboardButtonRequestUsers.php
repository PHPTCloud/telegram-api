<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\KeyboardButtonRequestUsersInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 *
 * Этот объект определяет критерии, используемые для запроса подходящих пользователей. Идентификаторы в
 * ыбранных пользователей будут переданы боту при нажатии соответствующей кнопки. Подробнее о запросе п
 * ользователей » (@see https://core.telegram.org/bots/features#chat-and-user-selection)
 *
 * @link    https://core.telegram.org/bots/api#keyboardbuttonrequestusers
 * @link    https://core.telegram.org/bots/features#chat-and-user-selection
 */
class KeyboardButtonRequestUsers implements KeyboardButtonRequestUsersInterface
{
    public function __construct(
        private readonly int|float $requestId,
        private readonly ?bool     $userIsBot = null,
        private readonly ?bool     $userIsPremium = null,
        private readonly ?int      $maxQuantity = null,
    ) {
    }

    public function getRequestId(): float|int
    {
        return $this->requestId;
    }

    public function userIsBot(): ?bool
    {
        return $this->userIsBot;
    }

    public function userIsPremium(): ?bool
    {
        return $this->userIsPremium;
    }

    public function getMaxQuantity(): ?int
    {
        return $this->maxQuantity;
    }
}
