<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface SetChatAdministratorCustomTitleArgumentInterface extends ArgumentInterface
{
    /**
     * Уникальный идентификатор целевой группы или имя пользователя целевой супергруппы или канала (в форма
     * те @channelusername).
     */
    public function getChatId(): int|float|string;

    /**
     * Уникальный идентификатор целевого пользователя.
     */
    public function getUserId(): int|float;

    /**
     * Новый пользовательский титул для администратора; Длина от 0 до 16 символов, смайлы не допускаются.
     */
    public function getCustomTitle(): string;
}
