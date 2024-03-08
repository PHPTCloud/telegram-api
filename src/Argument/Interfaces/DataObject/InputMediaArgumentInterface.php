<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

interface InputMediaArgumentInterface extends ArgumentInterface
{
    /**
     * Тип результата.
     */
    public function getType(): string;

    /**
     * Файл для отправки. Передайте file_id для отправки файла, существующего на серверах Telegram (рекомен
     * дуется), передайте URL-адрес HTTP для Telegram, чтобы получить файл из Интернета, или передайте «att
     * ach://<file_attach_name>», чтобы загрузить новый, используя multipart/ данные формы под именем <file
     * _attach_name>. Дополнительная информация об отправке файлов ».
     */
    public function getMedia(): LocalFileArgumentInterface|string;

    /**
     * Новая подпись для мультимедиа, 0–1024 символа после анализа сущностей. Если не указано, исходный заг
     * оловок сохраняется.
     */
    public function getCaption(): ?string;

    /**
     * Сериализованный в формате JSON список специальных объектов, отображаемых в заголовке, который можно
     * указать вместо parse_mode.
     *
     * @return MessageEntityArgumentInterface[]|null
     */
    public function getCaptionEntities(): ?array;

    /**
     * Режим разбора сущностей в новой подписи. Дополнительные сведения см. в разделе «Параметры форматиров
     * ания».
     *
     * @see https://core.telegram.org/bots/api#formatting-options
     */
    public function getParseMode(): ?string;
}
