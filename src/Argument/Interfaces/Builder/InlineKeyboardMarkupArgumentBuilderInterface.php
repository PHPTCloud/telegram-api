<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Builder;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InlineKeyboardButtonArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InlineKeyboardMarkupArgumentInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface InlineKeyboardMarkupArgumentBuilderInterface
{
    public function setButtonsCountPerLine(int $count): InlineKeyboardMarkupArgumentBuilderInterface;

    public function addButton(InlineKeyboardButtonArgumentInterface $button): InlineKeyboardMarkupArgumentBuilderInterface;

    public function addRow(InlineKeyboardButtonArgumentInterface ...$buttons): InlineKeyboardMarkupArgumentBuilderInterface;

    public function build(): InlineKeyboardMarkupArgumentInterface;
}
