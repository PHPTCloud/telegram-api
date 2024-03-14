<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

use PHPTCloud\TelegramApi\DomainService\Interfaces\ValueObject\UrlValueObjectInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface RevokeChatInviteLinkArgumentInterface extends ArgumentInterface
{
    /**
     * Уникальный идентификатор целевого чата или имя пользователя целевого канала (в формате @channelusern
     * ame).
     */
    public function getChatId(): int|float|string;

    /**
     * Ссылка для приглашения, которую нужно отозвать.
     */
    public function getInviteLink(): UrlValueObjectInterface|string;

    public function isUrlValueObject(): bool;
}
