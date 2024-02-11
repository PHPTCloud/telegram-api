<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\DomainService\Interfaces\Service;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ChatIdArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SendChatActionArgumentInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatInterface;

/**
 * @author  Пешко Илья peshkoi@mail.ru
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 */
interface ChatDomainServiceInterface
{
    /**
     * @param ChatIdArgumentInterface $argument
     *
     * Используйте этот метод, чтобы получать актуальную информацию о чате. Возвращает объект Chat в случае
     * успеха.
     *
     * @see https://core.telegram.org/bots/api#getchat
     * @see https://core.telegram.org/bots/api#chat
     */
    public function getChat(ChatIdArgumentInterface $argument): ChatInterface;

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
    public function sendChatAction(SendChatActionArgumentInterface $argument): bool;
}
