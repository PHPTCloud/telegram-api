<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ChatAdministratorRightsArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\KeyboardButtonRequestChatArgumentInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 *
 * Этот объект определяет критерии, используемые для запроса подходящего чата. Идентификатор выбранного
 * чата будет передан боту при нажатии соответствующей кнопки.
 * Подробнее о запросе чатов » (@see https://core.telegram.org/bots/features#chat-and-user-selection)
 *
 * @link    https://core.telegram.org/bots/api#keyboardbuttonrequestchat
 */
class KeyboardButtonRequestChatArgument implements KeyboardButtonRequestChatArgumentInterface
{
    public function __construct(
        private readonly int|float                                 $requestId,
        private readonly bool                                      $chatIsChannel,
        private readonly ?bool                                     $chatIsForum = null,
        private readonly ?bool                                     $chatHasUsername = null,
        private readonly ?bool                                     $chatIsCreated = null,
        private readonly ?ChatAdministratorRightsArgumentInterface $userAdministratorRights = null,
        private readonly ?ChatAdministratorRightsArgumentInterface $botAdministratorRights = null,
        private readonly ?bool                                     $botIsMember = null,
    ) {
    }

    public function getRequestId(): float|int
    {
        return $this->requestId;
    }

    public function chatIsChannel(): bool
    {
        return $this->chatIsChannel;
    }

    public function chatIsForum(): ?bool
    {
        return $this->chatIsForum;
    }

    public function chatHasUsername(): ?bool
    {
        return $this->chatHasUsername;
    }

    public function chatIsCreated(): ?bool
    {
        return $this->chatIsCreated;
    }

    public function getUserAdministratorRights(): ?ChatAdministratorRightsArgumentInterface
    {
        return $this->userAdministratorRights;
    }

    public function getBotAdministratorRights(): ?ChatAdministratorRightsArgumentInterface
    {
        return $this->botAdministratorRights;
    }

    public function botIsMember(): ?bool
    {
        return $this->botIsMember;
    }
}
