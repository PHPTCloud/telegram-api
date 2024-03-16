<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface InputMediaPhotoArgumentInterface extends InputMediaArgumentInterface
{
    /**
     * Передайте True, если фотография должна быть покрыта анимацией спойлера.
     */
    public function hasSpoiler(): ?bool;
}
