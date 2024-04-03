<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface InputMediaPhotoArgumentInterface extends InputMediaArgumentInterface
{
    /**
     * Передайте True, если медиа файл должен быть покрыт анимацией спойлера.
     */
    public function hasSpoiler(): ?bool;
}
