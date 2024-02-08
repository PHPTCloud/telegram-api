<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Builder;

use PHPTCloud\TelegramApi\Argument\DataObject\InlineKeyboardMarkupArgument;
use PHPTCloud\TelegramApi\Argument\Interfaces\Builder\InlineKeyboardMarkupArgumentBuilderInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InlineKeyboardButtonArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InlineKeyboardMarkupArgumentInterface;

class InlineKeyboardMarkupArgumentBuilder extends AbstractKeyboardMarkupArgumentBuilder implements InlineKeyboardMarkupArgumentBuilderInterface
{
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
        $this->initializeButtons();
        $this->buttons[] = [...$buttons];

        return $this;
    }

    public function build(): InlineKeyboardMarkupArgumentInterface
    {
        if (empty($this->buttons)) {
            throw new \InvalidArgumentException('Для отправки клавиатуры необходимо добавить минимум одну кнопку.');
        }

        if (null !== $this->buttonsCountPerLine && $this->buttonsCountPerLine > 0) {
            $this->buttons = $this->prepareButtons();
        }

        $keyboard = new InlineKeyboardMarkupArgument($this->buttons);
        $this->resetBuilder();

        return $keyboard;
    }

    private function resetBuilder(): void
    {
        $this->buttons = null;
        $this->buttonsCountPerLine = null;
    }
}
