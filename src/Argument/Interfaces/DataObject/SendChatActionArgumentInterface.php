<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

/**
 * Используйте этот метод, когда вам нужно сообщить пользователю, что что-то происходит на стороне бота.
 * Статус устанавливается на 5 секунд или меньше (при поступлении сообщения от вашего бота клиенты Te
 * legram очищают его статус набора). Возвращает True в случае успеха.
 *
 * Пример: ImageBot требуется некоторое время для обработки запроса и загрузки изображения. Вместо отпр
 * авки текстового сообщения типа «Получение изображения, пожалуйста, подождите…» бот может использоват
 * ь sendChatAction с action = upload_photo. Пользователь увидит статус бота «отправка фото».
 *
 * @link https://t.me/imagebot
 *
 * Мы рекомендуем использовать этот метод только в том случае, если получение ответа от бота займет зам
 * етное время.
 *
 * @see  https://core.telegram.org/bots/api#sendchataction
 */
interface SendChatActionArgumentInterface extends ArgumentInterface
{
    /**
     * Уникальный идентификатор целевого чата или имя пользователя целевого канала (в формате @channelusern
     * ame).
     */
    public function getChatId(): int|float|string;

    /**
     * Тип действия для трансляции. Выберите один из них, в зависимости от того, что пользователь собираетс
     * я получить: typing, upload_photo, record_video, upload_video, record_voice, upload_voice, upload_do
     * cument, choose_sticker, find_location, record_video_note, upload_video_note.
     *
     * @see \PHPTCloud\TelegramApi\DomainService\Enums\ChatActionEnum
     */
    public function getAction(): string;

    /**
     * Уникальный идентификатор целевой ветки сообщений (темы) форума; только для супергрупп форума.
     */
    public function getMessageThreadId(): ?int;
}
