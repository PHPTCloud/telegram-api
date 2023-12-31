<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 */
class TelegramBot implements TelegramBotInterface
{
    private function __construct(
        private readonly string  $token,
        private readonly ?string $id = null,
        private readonly ?string $username = null,
        private ?string          $name = null,
        private ?string          $description = null,
    ) {}

    public static function NewBasic(
        string  $token,
        ?string $username = null,
        ?string $name = null,
        ?string $description = null,
    ): static {
        return new self(
            token: $token,
            username: $username,
            name: $name,
            description: $description,
        );
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
}
