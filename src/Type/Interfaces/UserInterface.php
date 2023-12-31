<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 *
 * Telegram API
 * @link https://core.telegram.org/bots/api#user
 * Этот объект представляет пользователя или бота Telegram.
 */
interface UserInterface
{
    /**
     * Уникальный идентификатор этого пользователя или бота. Это число может иметь более 32 значащих битов,
     * и в некоторых языках программирования могут возникнуть трудности или неявные дефекты при его интерп
     * ретации. Но он имеет не более 52 значащих битов, поэтому для хранения этого идентификатора можно без
     * опасно использовать 64-битное целое число или тип с плавающей запятой двойной точности.
     *
     * @return int|float
     */
    public function getId(): int|float;

    public function isBot(): ?bool;

    public function getFirstName(): ?string;

    public function getLastName(): ?string;

    public function getUsername(): ?string;

    public function getLanguageCode(): ?string;

    public function isPremium(): ?bool;

    public function isAddedToAttachmentMenu(): ?bool;

    public function isCanJoinGroups(): ?bool;

    public function isCanReadAllGroupMessages(): ?bool;

    public function isSupportsInlineQueries(): ?bool;
}
