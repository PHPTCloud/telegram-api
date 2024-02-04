<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Builder;

abstract class AbstractKeyboardMarkupArgumentBuilder
{
    /**
     * Позволяет установить максимальное количество кнопок на одной строке.
     * Будет использовано при построении аргумента.
     */
    protected ?int $buttonsCountPerLine = null;
    protected ?array $buttons = null;

    protected function prepareButtons(): array
    {
        $result = [];

        foreach ($this->buttons as $row) {
            $count = count($row);

            if ($count <= $this->buttonsCountPerLine) {
                $result[] = $row;
                continue;
            }

            $currentRow = [];
            foreach ($row as $button) {
                if (count($currentRow) === $this->buttonsCountPerLine) {
                    $result[] = $currentRow;
                    $currentRow = [];
                }
                $currentRow[] = $button;
            }

            if (!empty($currentRow)) {
                $result[] = $currentRow;
            }
        }

        return $result;
    }

    protected function initializeButtons(): void
    {
        if (null !== $this->buttons) {
            return;
        }

        $this->buttons = [];
    }
}
