<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * Представляет ссылку для приглашения в чат.
 *
 * @see    https://core.telegram.org/bots/api#chatinvitelink
 */
interface ChatInviteLinkInterface
{
    /**
     * Ссылка для приглашения. Если ссылку создал другой администратор чата, то вторая часть ссылки будет з
     * аменена на «…».
     */
    public function getInviteLink(): string;

    /**
     * Создатель ссылки.
     */
    public function getCreator(): UserInterface;

    /**
     * Правда, если пользователи, присоединяющиеся к чату по ссылке, должны быть одобрены администраторами
     * чата.
     */
    public function isCreatesJoinRequest(): ?bool;

    /**
     * Правда, если ссылка первичная.
     */
    public function isPrimary(): ?bool;

    /**
     * Правда, если ссылку отзовут.
     */
    public function isRevoked(): ?bool;

    /**
     * Необязательный. Имя ссылки для приглашения.
     */
    public function getName(): ?string;

    /**
     * Необязательный. Момент времени (временная метка Unix), когда срок действия ссылки истечет или срок е
     * е действия истек.
     */
    public function getExpireDate(): ?int;

    /**
     * Необязательный. Максимальное количество пользователей, которые могут одновременно быть участниками ч
     * ата после присоединения к чату по этой ссылке-приглашению; 1-99999.
     */
    public function getMemberLimit(): ?int;

    /**
     * Необязательный. Количество ожидающих запросов на присоединение, созданных по этой ссылке.
     */
    public function getPendingJoinRequestCount(): ?int;
}
