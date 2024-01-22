<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 *
 * @see     https://core.telegram.org/bots/api#messageentity
 */
interface MessageEntityArgumentInterface
{
    public function getType(): string;

    public function getOffset(): int;

    public function getLength(): int;

    public function getUrl(): ?string;

    public function getUser(): ?UserArgumentInterface;

    public function getLanguage(): ?string;

    public function getCustomEmojiId(): ?string;
}
