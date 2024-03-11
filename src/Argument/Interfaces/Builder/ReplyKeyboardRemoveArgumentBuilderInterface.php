<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Builder;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReplyKeyboardRemoveArgumentInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface ReplyKeyboardRemoveArgumentBuilderInterface
{
    public function wantRemoveKeyboard(bool $removeKeyboard): ReplyKeyboardRemoveArgumentBuilderInterface;

    public function setSelective(bool $selective): ReplyKeyboardRemoveArgumentBuilderInterface;

    public function build(): ReplyKeyboardRemoveArgumentInterface;
}
