<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Builder;

use PHPTCloud\TelegramApi\Argument\DataObject\InlineKeyboardMarkupArgument;
use PHPTCloud\TelegramApi\Argument\Interfaces\Builder\InlineKeyboardMarkupArgumentBuilderInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InlineKeyboardButtonArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InlineKeyboardMarkupArgumentInterface;

class InlineKeyboardMarkupArgumentBuilder implements InlineKeyboardMarkupArgumentBuilderInterface
{
    private ?array $buttons = null;
    /**
     * Позволяет установить максимальное количество кнопок на одной строке.
     * Будет использовано при построении аргумента.
     */
    private ?int $buttonsCountPerLine = null;

    public function setButtonsCountPerLine(int $count): self
    {
        $this->buttonsCountPerLine = $count;

        return $this;
    }

    public function addButton(InlineKeyboardButtonArgumentInterface $button): self
    {
        $this->initializeButtons();
        $this->buttons[] = [$button];

        return $this;
    }

    public function addRow(InlineKeyboardButtonArgumentInterface ...$buttons): self
    {
        $this->buttons[] = [...$buttons];

        return $this;
    }

    public function build(): InlineKeyboardMarkupArgumentInterface
    {
        if (null !== $this->buttonsCountPerLine && $this->buttonsCountPerLine > 0) {
            $this->buttons = $this->prepareButtons();
        }

        return new InlineKeyboardMarkupArgument($this->buttons);
    }

    private function prepareButtons(): array
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

    private function initializeButtons(): void
    {
        if (null !== $this->buttons) {
            return;
        }

        $this->buttons = [];
    }
}
