<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\ValueObject;

interface StringValueObjectInterface
{
    public function getValue(): string;

    public function __toString(): string;
}
