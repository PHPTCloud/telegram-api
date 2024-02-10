<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ForceReplyArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InlineKeyboardMarkupArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\LocalFileArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReplyKeyboardMarkupArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReplyKeyboardRemoveArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReplyParametersArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SendAudioArgumentInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 *
 * Используйте этот метод для отправки аудиофайлов, если вы хотите, чтобы клиенты Telegram отображали и
 * х в музыкальном проигрывателе. Ваш звук должен быть в формате .MP3 или .M4A. В случае успеха отправл
 * енное сообщение возвращается. Боты в настоящее время могут отправлять аудиофайлы размером до 50 МБ,
 * в будущем этот лимит может быть изменен.
 *
 * Вместо этого для отправки голосовых сообщений используйте метод sendVoice.
 *
 * @see     https://core.telegram.org/bots/api#sendvoice
 * @see     https://core.telegram.org/bots/api#sendaudio
 */
class SendAudioArgument implements SendAudioArgumentInterface
{
    public function __construct(
        private readonly int|float|string $chatId,
        private readonly LocalFileArgumentInterface|string $audio,
        private readonly ?string $caption = null,
        private readonly ?string $parseMode = null,
        private readonly ?array $captionEntities = null,
        private readonly ?int $duration = null,
        private readonly ?string $performer = null,
        private readonly ?string $title = null,
        private readonly LocalFileArgumentInterface|string|null $thumbnail = null,
        private readonly ?bool $disableNotification = null,
        private readonly ?bool $protectContent = null,
        private readonly ?ReplyParametersArgumentInterface $replyParameters = null,
        private readonly InlineKeyboardMarkupArgumentInterface
                           |ReplyKeyboardMarkupArgumentInterface
                           |ReplyKeyboardRemoveArgumentInterface
                           |ForceReplyArgumentInterface
                           |null $replyMarkup = null,
        protected readonly ?int $messageThreadId = null,
    ) {
    }

    public function getChatId(): float|int|string
    {
        return $this->chatId;
    }

    public function getAudio(): LocalFileArgumentInterface|string
    {
        return $this->audio;
    }

    public function getCaption(): ?string
    {
        return $this->caption;
    }

    public function getParseMode(): ?string
    {
        return $this->parseMode;
    }

    public function getCaptionEntities(): ?array
    {
        return $this->captionEntities;
    }

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function getPerformer(): ?string
    {
        return $this->performer;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function getThumbnail(): LocalFileArgumentInterface|string|null
    {
        return $this->thumbnail;
    }

    public function wantDisableNotification(): ?bool
    {
        return $this->disableNotification;
    }

    public function wantProtectContent(): ?bool
    {
        return $this->protectContent;
    }

    public function getReplyParameters(): ?ReplyParametersArgumentInterface
    {
        return $this->replyParameters;
    }

    public function getInlineKeyboardMarkup(): ?InlineKeyboardMarkupArgumentInterface
    {
        return $this->replyMarkup instanceof InlineKeyboardMarkupArgumentInterface ? $this->replyMarkup : null;
    }

    public function getReplyKeyboardMarkup(): ?ReplyKeyboardMarkupArgumentInterface
    {
        return $this->replyMarkup instanceof ReplyKeyboardMarkupArgumentInterface ? $this->replyMarkup : null;
    }

    public function getReplyKeyboardRemove(): ?ReplyKeyboardRemoveArgumentInterface
    {
        return $this->replyMarkup instanceof ReplyKeyboardRemoveArgumentInterface ? $this->replyMarkup : null;
    }

    public function getForceReply(): ?ForceReplyArgumentInterface
    {
        return $this->replyMarkup instanceof ForceReplyArgumentInterface ? $this->replyMarkup : null;
    }

    public function getMessageThreadId(): ?int
    {
        return $this->messageThreadId;
    }
}
