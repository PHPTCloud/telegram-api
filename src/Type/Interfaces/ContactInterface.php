<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 *
 * Этот объект представляет телефонный контакт.
 * @link    https://core.telegram.org/bots/api#contact
 */
interface ContactInterface
{
    /**
     * Номер телефона контакта.
     *
     * @return string
     */
    public function getPhoneNumber(): string;

    /**
     * Имя контакта.
     *
     * @return string
     */
    public function getFirstName(): string;

    /**
     * Необязательный. Фамилия контакта.
     *
     * @return string|null
     */
    public function getLastName(): ?string;

    /**
     * Необязательный. Идентификатор пользователя контакта в Telegram. Это число может иметь более 32 знача
     * щих битов, и в некоторых языках программирования могут возникнуть трудности или неявные дефекты при
     * его интерпретации. Но он имеет не более 52 значащих битов, поэтому для хранения этого идентификатора
     * можно безопасно использовать 64-битное целое число или тип с плавающей запятой двойной точности.
     *
     * @return int|float|null
     */
    public function getUserId(): null|int|float;

    /**
     * Необязательный. Дополнительные данные о контакте в виде vCard.
     *
     * @link https://en.wikipedia.org/wiki/VCard
     * @return string|null
     */
    public function getVCard(): ?string;
}
