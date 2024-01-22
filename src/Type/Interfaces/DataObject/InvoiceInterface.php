<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * @version 1.0.0
 *
 * Этот объект содержит основную информацию о счете.
 *
 * @see    https://core.telegram.org/bots/api#invoice
 */
interface InvoiceInterface
{
    /**
     * Наименование товара.
     */
    public function getTitle(): string;

    /**
     * Описание товара.
     */
    public function getDescription(): string;

    /**
     * Уникальный параметр глубокой связи бота, который можно использовать для создания этого счета.
     */
    public function getStartParameter(): string;

    /**
     * Трехбуквенный код валюты ISO 4217.
     *
     * @see https://core.telegram.org/bots/payments#supported-currencies
     */
    public function getCurrency(): string;

    /**
     * Общая цена в наименьших единицах валюты (целое, а не плавающее/двойное). Например, для цены в 1,45 д
     * оллара США сумма пропуска = 145. См. параметр exp в файле currencies.json, он показывает количество
     * цифр после десятичной точки для каждой валюты (2 для большинства валют).
     *
     * @see https://core.telegram.org/bots/payments/currencies.json
     */
    public function getTotalAmount(): int|float;
}
