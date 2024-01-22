<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * @version 1.0.0
 *
 * Этот объект представляет телефонный контакт.
 *
 * @see    https://core.telegram.org/bots/api#contact
 */
interface ContactInterface
{
    /**
     * Номер телефона контакта.
     */
    public function getPhoneNumber(): string;

    /**
     * Имя контакта.
     */
    public function getFirstName(): string;

    /**
     * Необязательный. Фамилия контакта.
     */
    public function getLastName(): ?string;

    /**
     * Необязательный. Идентификатор пользователя контакта в Telegram. Это число может иметь более 32 знача
     * щих битов, и в некоторых языках программирования могут возникнуть трудности или неявные дефекты при
     * его интерпретации. Но он имеет не более 52 значащих битов, поэтому для хранения этого идентификатора
     * можно безопасно использовать 64-битное целое число или тип с плавающей запятой двойной точности.
     */
    public function getUserId(): null|int|float;

    /**
     * Необязательный. Дополнительные данные о контакте в виде vCard.
     *
     * @see https://en.wikipedia.org/wiki/VCard
     */
    public function getVCard(): ?string;
}
