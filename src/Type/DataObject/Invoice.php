<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\InvoiceInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 *
 * Этот объект содержит основную информацию о счете.
 * @link    https://core.telegram.org/bots/api#invoice
 */
class Invoice implements InvoiceInterface
{
    public function __construct(
        private readonly string    $title,
        private readonly string    $description,
        private readonly string    $startParameter,
        private readonly string    $currency,
        private readonly int|float $totalAmount,
    ) {}

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getStartParameter(): string
    {
        return $this->startParameter;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getTotalAmount(): float|int
    {
        return $this->totalAmount;
    }
}
