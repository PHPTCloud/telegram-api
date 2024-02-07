<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Builder;

use PHPTCloud\TelegramApi\Argument\DataObject\ReplyKeyboardRemoveArgument;
use PHPTCloud\TelegramApi\Argument\Interfaces\Builder\ReplyKeyboardRemoveArgumentBuilderInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReplyKeyboardRemoveArgumentInterface;

class ReplyKeyboardRemoveArgumentBuilder implements ReplyKeyboardRemoveArgumentBuilderInterface
{
    private bool $removeKeyboard = true;
    private bool $selective = false;

    public function wantRemoveKeyboard(bool $removeKeyboard): ReplyKeyboardRemoveArgumentBuilderInterface
    {
        $this->removeKeyboard = $removeKeyboard;

        return $this;
    }

    public function setSelective(bool $selective): ReplyKeyboardRemoveArgumentBuilderInterface
    {
        $this->selective = $selective;

        return $this;
    }

    public function build(): ReplyKeyboardRemoveArgumentInterface
    {
        return new ReplyKeyboardRemoveArgument(
            $this->removeKeyboard,
            $this->selective,
        );
    }
}
