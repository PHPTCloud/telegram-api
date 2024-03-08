<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ReplyKeyboardMarkupInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * Этот объект представляет собой пользовательскую клавиатуру с опциями ответа (подробности и примеры с
 * м. в разделе Знакомство с ботами).
 *
 * @see    https://core.telegram.org/bots/api#replykeyboardmarkup
 * @see    https://core.telegram.org/bots/features#keyboards
 */
class ReplyKeyboardMarkup implements ReplyKeyboardMarkupInterface
{
    public function __construct(
        private readonly array $keyboard,
        private readonly ?bool $persistent = null,
        private readonly ?bool $resizeKeyboard = null,
        private readonly ?bool $oneTimeKeyboard = null,
        private readonly ?string $inputFieldPlaceholder = null,
        private readonly ?bool $selective = null,
    ) {
    }

    public function getKeyboard(): array
    {
        return $this->keyboard;
    }

    public function isPersistent(): ?bool
    {
        return $this->persistent;
    }

    public function wantResizeKeyboard(): ?bool
    {
        return $this->resizeKeyboard;
    }

    public function isOneTimeKeyboard(): ?bool
    {
        return $this->oneTimeKeyboard;
    }

    public function getInputFieldPlaceholder(): ?string
    {
        return $this->inputFieldPlaceholder;
    }

    public function isSelective(): ?bool
    {
        return $this->selective;
    }
}
