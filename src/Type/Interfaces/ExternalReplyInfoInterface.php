<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 *
 * Этот объект содержит информацию о сообщении, которое может прийти из другого чата или темы форума.
 * @link    https://core.telegram.org/bots/api#externalreplyinfo
 */
interface ExternalReplyInfoInterface
{
    /**
     * Происхождение сообщения, на которое ответило данное сообщение.
     *
     * @link https://core.telegram.org/bots/api#messageorigin
     * @return MessageOriginInterface
     */
    public function getOrigin(): MessageOriginInterface;

    /**
     * Необязательный. Чат, которому принадлежит исходное сообщение. Доступно, только если чат является суп
     * ергруппой или каналом.
     *
     * @return ChatInterface|null
     */
    public function getChat(): ?ChatInterface;

    /**
     * Необязательный. Уникальный идентификатор сообщения внутри исходного чата. Доступно, только если исхо
     * дный чат является супергруппой или каналом.
     *
     * @return int|float|null
     */
    public function getMessageId(): null|int|float;

    /**
     * Необязательный. Параметры, используемые для создания предварительного просмотра ссылки для исходного
     * сообщения, если это текстовое сообщение.
     *
     * @link https://core.telegram.org/bots/api#linkpreviewoptions
     * @return LinkPreviewOptionsInterface|null
     */
    public function getLinkPreviewOptions(): ?LinkPreviewOptionsInterface;

    /**
     * Необязательный. Сообщение — анимация, информация об анимации.
     *
     * @link https://core.telegram.org/bots/api#animation
     * @return AnimationInterface|null
     */
    public function getAnimation(): ?AnimationInterface;

    /**
     * Необязательный. Сообщение — аудиофайл, информация о файле.
     *
     * @return AudioInterface|null
     */
    public function getAudio(): ?AudioInterface;

    /**
     * Необязательный. Сообщение — общий файл, информация о файле.
     *
     * @return DocumentInterface|null
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
     *
     * @return StickerInterface|null
     */
    public function getSticker(): ?StickerInterface;

    /**
     * Необязательный. Сообщение – это пересланная история.
     *
     * @return StoryInterface|null
     */
    public function getStory(): ?StoryInterface;

    /**
     * Необязательный. Сообщение — видео, информация о видео.
     *
     * @return VideoInterface|null
     */
    public function getVideo(): ?VideoInterface;

    /**
     * Необязательный. Сообщение – видеозаметка, информация о видеообращении.
     *
     * @link https://telegram.org/blog/video-messages-and-telescope
     * @return VideoNoteInterface|null
     */
    public function getVideoNote(): ?VideoNoteInterface;

    /**
     * Необязательный. Сообщение — голосовое сообщение, информация о файле.
     *
     * @return VoiceInterface|null
     */
    public function getVoice(): ?VoiceInterface;

    /**
     * Необязательный. Верно, если медиа-сообщение покрыто анимацией-спойлером.
     *
     * @return bool|null
     */
    public function hasMediaSpoiler(): ?bool;

    /**
     * Необязательный. Сообщение — общий контакт, информация о контакте.
     *
     * @return ContactInterface|null
     */
    public function getContact(): ?ContactInterface;

    /**
     * Необязательный. Сообщение представляет собой игральную кость со случайным значением.
     *
     * @return DiceInterface|null
     */
    public function getDice(): ?DiceInterface;

    /**
     * Необязательный. Сообщение – игра, информация об игре.
     * Подробнее об играх » https://core.telegram.org/bots/api#games
     *
     * @return GameInterface|null
     */
    public function getGame(): ?GameInterface;

    /**
     * Необязательный. Сообщение — запланированный розыгрыш, информация о розыгрыше.
     *
     * @return GiveawayInterface|null
     */
    public function getGiveaway(): ?GiveawayInterface;

    /**
     * Необязательный. Розыгрыш с участием публичных победителей завершен.
     *
     * @return GiveawayWinnersInterface|null
     */
    public function getGiveawayWinners(): ?GiveawayWinnersInterface;

    /**
     * Необязательный. Сообщение — счет на оплату, информация о счете.
     * Подробнее о платежах » https://core.telegram.org/bots/api#payments
     *
     * @return InvoiceInterface|null
     */
    public function getInvoice(): ?InvoiceInterface;

    /**
     * Необязательный. Сообщение — это общее местоположение, информация о местоположении.
     *
     * @return LocationInterface|null
     */
    public function getLocation(): ?LocationInterface;

    /**
     * Необязательный. Сообщение - родной опрос, информация об опросе.
     *
     * @return PollInterface|null
     */
    public function getPoll(): ?PollInterface;

    /**
     * Необязательный. Сообщение – место проведения, информация о месте проведения.
     *
     * @return VenueInterface|null
     */
    public function getVenue(): ?VenueInterface;
}
