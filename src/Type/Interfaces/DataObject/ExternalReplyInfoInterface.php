<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * @version 1.0.0
 *
 * Этот объект содержит информацию о сообщении, которое может прийти из другого чата или темы форума.
 *
 * @see    https://core.telegram.org/bots/api#externalreplyinfo
 */
interface ExternalReplyInfoInterface
{
    /**
     * Происхождение сообщения, на которое ответило данное сообщение.
     *
     * @see https://core.telegram.org/bots/api#messageorigin
     */
    public function getOrigin(): MessageOriginInterface;

    /**
     * Необязательный. Чат, которому принадлежит исходное сообщение. Доступно, только если чат является суп
     * ергруппой или каналом.
     */
    public function getChat(): ?ChatInterface;

    /**
     * Необязательный. Уникальный идентификатор сообщения внутри исходного чата. Доступно, только если исхо
     * дный чат является супергруппой или каналом.
     */
    public function getMessageId(): null|int|float;

    /**
     * Необязательный. Параметры, используемые для создания предварительного просмотра ссылки для исходного
     * сообщения, если это текстовое сообщение.
     *
     * @see https://core.telegram.org/bots/api#linkpreviewoptions
     */
    public function getLinkPreviewOptions(): ?LinkPreviewOptionsInterface;

    /**
     * Необязательный. Сообщение — анимация, информация об анимации.
     *
     * @see https://core.telegram.org/bots/api#animation
     */
    public function getAnimation(): ?AnimationInterface;

    /**
     * Необязательный. Сообщение — аудиофайл, информация о файле.
     */
    public function getAudio(): ?AudioInterface;

    /**
     * Необязательный. Сообщение — общий файл, информация о файле.
     */
    public function getDocument(): ?DocumentInterface;

    /**
     * Необязательный. Сообщение представляет собой фотографию, доступные размеры фотографии.
     *
     * @return PhotoSizeInterface[]|null
     */
    public function getPhoto(): ?array;

    /**
     * Необязательный. Сообщение — стикер, информация о стикере.
     */
    public function getSticker(): ?StickerInterface;

    /**
     * Необязательный. Сообщение – это пересланная история.
     */
    public function getStory(): ?StoryInterface;

    /**
     * Необязательный. Сообщение — видео, информация о видео.
     */
    public function getVideo(): ?VideoInterface;

    /**
     * Необязательный. Сообщение – видеозаметка, информация о видеообращении.
     *
     * @see https://telegram.org/blog/video-messages-and-telescope
     */
    public function getVideoNote(): ?VideoNoteInterface;

    /**
     * Необязательный. Сообщение — голосовое сообщение, информация о файле.
     */
    public function getVoice(): ?VoiceInterface;

    /**
     * Необязательный. Верно, если медиа-сообщение покрыто анимацией-спойлером.
     */
    public function hasMediaSpoiler(): ?bool;

    /**
     * Необязательный. Сообщение — общий контакт, информация о контакте.
     */
    public function getContact(): ?ContactInterface;

    /**
     * Необязательный. Сообщение представляет собой игральную кость со случайным значением.
     */
    public function getDice(): ?DiceInterface;

    /**
     * Необязательный. Сообщение – игра, информация об игре.
     * Подробнее об играх » https://core.telegram.org/bots/api#games.
     */
    public function getGame(): ?GameInterface;

    /**
     * Необязательный. Сообщение — запланированный розыгрыш, информация о розыгрыше.
     */
    public function getGiveaway(): ?GiveawayInterface;

    /**
     * Необязательный. Розыгрыш с участием публичных победителей завершен.
     */
    public function getGiveawayWinners(): ?GiveawayWinnersInterface;

    /**
     * Необязательный. Сообщение — счет на оплату, информация о счете.
     * Подробнее о платежах » https://core.telegram.org/bots/api#payments.
     */
    public function getInvoice(): ?InvoiceInterface;

    /**
     * Необязательный. Сообщение — это общее местоположение, информация о местоположении.
     */
    public function getLocation(): ?LocationInterface;

    /**
     * Необязательный. Сообщение - родной опрос, информация об опросе.
     */
    public function getPoll(): ?PollInterface;

    /**
     * Необязательный. Сообщение – место проведения, информация о месте проведения.
     */
    public function getVenue(): ?VenueInterface;
}
