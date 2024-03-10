<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\ValueObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface StringValueObjectInterface
{
    public function getValue(): string;

    public function __toString(): string;
}
