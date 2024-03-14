<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\DomainService\Interfaces\ValueObject;

interface UrlValueObjectInterface extends \Stringable
{
    public const SCHEME_KEY = 'scheme';
    public const HOST_KEY = 'host';
    public const PATH_KEY = 'path';
    public const PORT_KEY = 'port';
    public const PASS_KEY = 'pass';
    public const FRAGMENT_KEY = 'fragment';
    public const USER_KEY = 'user';
    public const QUERY_KEY = 'query';

    public function getScheme(): ?string;

    public function getHost(): ?string;

    public function getPath(): ?string;

    public function getPort(): ?string;

    public function getPass(): ?string;

    public function getUser(): ?string;

    public function getFragment(): ?string;

    public function getQuery(): ?string;

    public function getValue(): string;
}
