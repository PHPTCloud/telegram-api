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

    /**
     * Метод позволяет указать максимальное количество кнопок в одной строке.
     *
     * Пример работы №1:
     * $count = 2
     * Исходный массив кнопок [
     *  [button1, button2, button3, button4],
     *  [button5, button6],
     *  [button7],
     * ]
     *
     * Результирующий массив кнопок [
     *  [button1, button2],
     *  [button3, button4],
     *  [button5, button6],
     *  [button7],
     * ]
     *
     * Пример работы №2:
     * $count = 3
     * Исходный массив кнопок [
     *  [button1, button2, button3, button4],
     *  [button5, button6],
     *  [button7],
     * ]
     *
     * Результирующий массив кнопок [
     *  [button1, button2, button3],
     *  [button4],
     *  [button5, button6],
     *  [button7],
     * ]
     *
     * @TODO Надо написать алгоритм равномерного распределения кнопок по всем возможным строкам.
     *
     * @param int $count
     *
     * @return $this
     */
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