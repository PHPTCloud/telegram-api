<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\DomainService\ValueObject;

use PHPTCloud\TelegramApi\DomainService\Interfaces\ValueObject\UrlValueObjectInterface;

class Link implements UrlValueObjectInterface
{
    public function __construct(
        private readonly string $value,
    ) {
    }

    public function getScheme(): ?string
    {
        return parse_url($this->value)[self::SCHEME_KEY] ?? null;
    }

    public function getHost(): ?string
    {
        return parse_url($this->value)[self::HOST_KEY] ?? null;
    }

    public function getPath(): ?string
    {
        return parse_url($this->value)[self::PATH_KEY] ?? null;
    }

    public function getPort(): ?string
    {
        return parse_url($this->value)[self::PORT_KEY] ?? null;
    }

    public function getPass(): ?string
    {
        return parse_url($this->value)[self::PASS_KEY] ?? null;
    }

    public function getFragment(): ?string
    {
        return parse_url($this->value)[self::FRAGMENT_KEY] ?? null;
    }

    public function getUser(): ?string
    {
        return parse_url($this->value)[self::USER_KEY] ?? null;
    }

    public function getQuery(): ?string
    {
        return parse_url($this->value)[self::QUERY_KEY] ?? null;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function __toString() : string
    {
        return $this->getValue();
    }
}
