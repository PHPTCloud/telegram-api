<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 */
abstract class AbstractDeserializer
{
    protected function filterNumeric(mixed $value): int|float|null
    {
        if (is_float($value)) {
            return (float)$value;
        } elseif (is_int($value)) {
            return (int)$value;
        } else {
            return null;
        }
    }

    protected function filterString(mixed $value): ?string
    {
        if (is_string($value)) {
            return trim($value);
        } else {
            return null;
        }
    }

    protected function filterBoolean(mixed $value): ?bool
    {
        if (is_bool($value)) {
            return filter_var($value, FILTER_VALIDATE_BOOL);
        } else {
            return null;
        }
    }
}
