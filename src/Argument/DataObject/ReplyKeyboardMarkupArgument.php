<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReplyKeyboardMarkupArgumentInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 *
 * Этот объект представляет собой пользовательскую клавиатуру с опциями ответа (подробности и примеры с
 * м. в разделе Знакомство с ботами).
 *
 * @link    https://core.telegram.org/bots/api#replykeyboardmarkup
 * @link    https://core.telegram.org/bots/features#keyboards
 */
class ReplyKeyboardMarkupArgument implements ReplyKeyboardMarkupArgumentInterface
{
    public function __construct(
        private readonly array   $keyboard,
        private readonly ?bool   $persistent = null,
        private readonly ?bool   $resizeKeyboard = null,
        private readonly ?bool   $oneTimeKeyboard = null,
        private readonly ?string $inputFieldPlaceholder = null,
        private readonly ?bool   $selective = null,
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
