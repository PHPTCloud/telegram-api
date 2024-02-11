<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SendChatActionArgumentInterface;

/**
 * Используйте этот метод, когда вам нужно сообщить пользователю, что что-то происходит на стороне бота.
 * Статус устанавливается на 5 секунд или меньше (при поступлении сообщения от вашего бота клиенты Te
 * legram очищают его статус набора). Возвращает True в случае успеха.
 *
 * Пример: ImageBot требуется некоторое время для обработки запроса и загрузки изображения. Вместо отпр
 * авки текстового сообщения типа «Получение изображения, пожалуйста, подождите…» бот может использоват
 * ь sendChatAction с action = upload_photo. Пользователь увидит статус бота «отправка фото».
 *
 * @see https://t.me/imagebot
 *
 * Мы рекомендуем использовать этот метод только в том случае, если получение ответа от бота займет зам
 * етное время.
 * @see  https://core.telegram.org/bots/api#sendchataction
 */
class SendChatActionArgument implements SendChatActionArgumentInterface
{
    public function __construct(
        private readonly int|float|string $chatId,
        private readonly string $action,
        private readonly ?int $messageThreadId = null,
    ) {
    }

    public function getChatId(): float|int|string
    {
        return $this->chatId;
    }

    public function getAction(): string
    {
        return $this->action;
    }

    public function getMessageThreadId(): ?int
    {
        return $this->messageThreadId;
    }
}
