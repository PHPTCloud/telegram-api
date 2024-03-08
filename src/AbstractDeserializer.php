<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
abstract class AbstractDeserializer
{
    protected function filterNumeric(mixed $value, int|float $default = null): int|float|null
    {
        if (is_float($value)) {
            return $value;
        } elseif (is_int($value)) {
            return $value;
        }

        return $default;
    }

    protected function filterString(mixed $value, string $default = null): ?string
    {
        if (is_string($value)) {
            return trim($value);
        }

        return $default;
    }

    protected function filterBoolean(mixed $value, bool $default = null): ?bool
    {
        if (is_bool($value)) {
            return filter_var($value, FILTER_VALIDATE_BOOL);
        }

        return $default;
    }

    protected function filterArray(mixed $value, array $default = null): ?array
    {
        if (is_array($value)) {
            return $value;
        }

        return $default;
    }
}
