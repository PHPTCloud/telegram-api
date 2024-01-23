<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InlineKeyboardMarkupArgumentInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 */
class InlineKeyboardMarkupArgument implements InlineKeyboardMarkupArgumentInterface
{
    public function __construct(
        private readonly array $inlineKeyboard,
    ) {
    }

    public function getInlineKeyboard(): array
    {
        return $this->inlineKeyboard;
    }
}
