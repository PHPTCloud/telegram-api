<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\LinkPreviewOptionsArgumentInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 */
class LinkPreviewOptionsArgument implements LinkPreviewOptionsArgumentInterface
{
    public function __construct(
        private readonly ?bool $disabled = null,
        private readonly ?string $url = null,
        private readonly ?bool $preferSmallMedia = null,
        private readonly ?bool $preferLargeMedia = null,
        private readonly ?bool $showAboveText = null,
    ) {
    }

    public function isDisabled(): ?bool
    {
        return $this->disabled;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function isPreferSmallMedia(): ?bool
    {
        return $this->preferSmallMedia;
    }

    public function isPreferLargeMedia(): ?bool
    {
        return $this->preferLargeMedia;
    }

    public function isShowAboveText(): ?bool
    {
        return $this->showAboveText;
    }
}
