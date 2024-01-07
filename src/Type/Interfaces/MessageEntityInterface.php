<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 * @version 1.0.0
 *
 * Этот объект представляет собой особый объект в текстовом сообщении. Например, хэштеги, имена пользов
 * ателей, URL-адреса и т.д.
 * @link    https://core.telegram.org/bots/api#messageentity
 */
interface MessageEntityInterface
{
    /**
     * Тип сущности. В настоящее время можно использовать:
     * - «упоминание» (@username);
     * - «хэштег» (#hashtag);
     * - «cashtag» ($USD);
     * - «bot_command» (/start@jobs_bot);
     * - «url» (https://telegram.org);
     * - «электронная почта» (do-not-reply@telegram.org);
     * - «номер_телефона» (+1-212-555-0123);
     * - «жирный» (жирный текст);
     * - «курсив» (курсивный текст);
     * - «подчеркивание» ( подчеркнутый текст);
     * - «strikethrough» (зачеркнутый текст);
     * - «spoiler» (сообщение о спойлере);
     * - «blockquote» (блочная цитата);
     * - «code» (строка моноширины);
     * - «pre» (блок моноширины);
     * - «text_link» (для кликабельных текстовые URL-адреса);
     * - «text_mention» (для пользователей без имен пользователей);
     * - «custom_emoji» (для встроенных пользовательских стикеров-эмодзи).
     *
     * @link https://telegram.org/blog/edit#new-mentions
     * @see  \PHPTCloud\TelegramApi\Type\Enums\MessageEntityTypeEnum
     * @return string
     */
    public function getType(): string;

    /**
     * Смещение в кодовых единицах UTF-16 до начала объекта.
     *
     * @link https://core.telegram.org/api/entities#entity-length
     * @return int
     */
    public function getOffset(): int;

    /**
     * Длина объекта в кодовых единицах UTF-16.
     *
     * @link https://core.telegram.org/api/entities#entity-length
     * @return int
     */
    public function getLength(): int;

    /**
     * Необязательный. Только для «text_link»: URL-адрес, который будет открыт после того, как пользователь
     * нажмет на текст.
     *
     * @return string|null
     */
    public function getUrl(): ?string;

    /**
     * Необязательный. Только для «text_mention» — упомянутый пользователь.
     *
     * @return UserInterface|null
     */
    public function getUser(): ?UserInterface;

    /**
     * Необязательный. Только для «pre» — язык программирования текста сущности.
     *
     * @return string|null
     */
    public function getLanguage(): ?string;

    /**
     * Необязательный. Только для «custom_emoji» — уникальный идентификатор пользовательского смайлика. Исп
     * ользуйте getCustomEmojiStickers, чтобы получить полную информацию о стикере.
     *
     * @link https://core.telegram.org/bots/api#getcustomemojistickers
     * @return string|null
     */
    public function getCustomEmojiId(): ?string;
}
