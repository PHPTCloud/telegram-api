<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\ValueObject;

use PHPTCloud\TelegramApi\Type\Interfaces\ValueObject\StringValueObjectInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class Code implements StringValueObjectInterface
{
    public function __construct(
        private readonly string $code,
        private readonly string $language,
    ) {
    }

    public function getValue(): string
    {
        $pattern = "```%s\r\n%s\r\n```";

        return sprintf($pattern, $this->language, $this->code);
    }

    public function __toString(): string
    {
        return $this->getValue();
    }
}
