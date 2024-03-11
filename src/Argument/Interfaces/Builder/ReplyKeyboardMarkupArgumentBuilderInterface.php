<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Builder;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\KeyboardButtonArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReplyKeyboardMarkupArgumentInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface ReplyKeyboardMarkupArgumentBuilderInterface
{
    public function addButton(KeyboardButtonArgumentInterface $button): ReplyKeyboardMarkupArgumentBuilderInterface;

    public function addRow(KeyboardButtonArgumentInterface ...$buttons): ReplyKeyboardMarkupArgumentBuilderInterface;

    public function setButtonsCountPerLine(int $count): ReplyKeyboardMarkupArgumentBuilderInterface;

    public function setResizeKeyboard(bool $resizeKeyboard): ReplyKeyboardMarkupArgumentBuilderInterface;

    public function setOneTimeKeyboard(bool $oneTimeKeyboard): ReplyKeyboardMarkupArgumentBuilderInterface;

    public function setInputFieldPlaceholder(string $inputFieldPlaceholder): ReplyKeyboardMarkupArgumentBuilderInterface;

    public function setSelective(bool $selective): ReplyKeyboardMarkupArgumentBuilderInterface;

    public function setPersistent(bool $persistent): ReplyKeyboardMarkupArgumentBuilderInterface;

    public function build(): ReplyKeyboardMarkupArgumentInterface;
}
