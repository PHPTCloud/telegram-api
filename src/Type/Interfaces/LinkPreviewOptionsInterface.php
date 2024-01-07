<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 *
 * Описывает параметры, используемые для создания предварительного просмотра ссылки.
 * @link    https://core.telegram.org/bots/api#linkpreviewoptions
 */
interface LinkPreviewOptionsInterface
{
    /**
     * Необязательный. Правда, если предварительный просмотр ссылки отключен.
     *
     * @return bool|null
     */
    public function isDisabled(): ?bool;

    /**
     * Необязательный. URL-адрес, который будет использоваться для предварительного просмотра ссылки. Если
     * пусто, то будет использоваться первый URL-адрес, найденный в тексте сообщения.
     *
     * @return string|null
     */
    public function getUrl(): ?string;

    /**
     * Необязательный. Правда, если медиафайл в предварительном просмотре ссылки должен быть уменьшен; игно
     * рируется, если URL-адрес не указан явно или изменение размера носителя не поддерживается для предвар
     * ительного просмотра.
     *
     * @return bool|null
     */
    public function isPreferSmallMedia(): ?bool;

    /**
     * Необязательный. Правда, если носитель в превью ссылки предполагается увеличить; игнорируется, если U
     * RL-адрес не указан явно или изменение размера носителя не поддерживается для предварительного просмо
     * тра.
     *
     * @return bool|null
     */
    public function isPreferLargeMedia(): ?bool;

    /**
     * Необязательный. True, если предварительный просмотр ссылки должен отображаться над текстом сообщения;
     * в противном случае предварительный просмотр ссылки будет отображаться под текстом сообщения.
     *
     * @return bool|null
     */
    public function isShowAboveText(): ?bool;
}
