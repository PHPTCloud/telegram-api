<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 * @version 1.0.0
 *
 * Представляет ссылку для приглашения в чат.
 * @link    https://core.telegram.org/bots/api#chatinvitelink
 */
interface ChatInviteLinkInterface
{
    /**
     * Ссылка для приглашения. Если ссылку создал другой администратор чата, то вторая часть ссылки будет з
     * аменена на «…».
     *
     * @return string
     */
    public function getInviteLink(): string;

    /**
     * Создатель ссылки.
     *
     * @return UserInterface
     */
    public function getCreator(): UserInterface;

    /**
     * Правда, если пользователи, присоединяющиеся к чату по ссылке, должны быть одобрены администраторами
     * чата.
     *
     * @return bool|null
     */
    public function isCreatesJoinRequest(): ?bool;

    /**
     * Правда, если ссылка первичная.
     *
     * @return bool|null
     */
    public function isPrimary(): ?bool;

    /**
     * Правда, если ссылку отзовут.
     *
     * @return bool|null
     */
    public function isRevoked(): ?bool;

    /**
     * Необязательный. Имя ссылки для приглашения.
     *
     * @return string|null
     */
    public function getName(): ?string;

    /**
     * Необязательный. Момент времени (временная метка Unix), когда срок действия ссылки истечет или срок е
     * е действия истек.
     *
     * @return int|null
     */
    public function getExpireDate(): ?int;

    /**
     * Необязательный. Максимальное количество пользователей, которые могут одновременно быть участниками ч
     * ата после присоединения к чату по этой ссылке-приглашению; 1-99999.
     *
     * @return int|null
     */
    public function getMemberLimit(): ?int;

    /**
     * Необязательный. Количество ожидающих запросов на присоединение, созданных по этой ссылке.
     *
     * @return int|null
     */
    public function getPendingJoinRequestCount(): ?int;
}
