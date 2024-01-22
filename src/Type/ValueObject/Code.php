<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\ValueObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 */
class Code
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
