<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Builder;

use PHPTCloud\TelegramApi\Argument\DataObject\ReplyKeyboardMarkupArgument;
use PHPTCloud\TelegramApi\Argument\Interfaces\Builder\ReplyKeyboardMarkupArgumentBuilderInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\KeyboardButtonArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReplyKeyboardMarkupArgumentInterface;

class ReplyKeyboardMarkupArgumentBuilder extends AbstractKeyboardMarkupArgumentBuilder implements ReplyKeyboardMarkupArgumentBuilderInterface
{
    private bool $resizeKeyboard = false;
    private bool $oneTimeKeyboard = false;
    private ?string $inputFieldPlaceholder = null;
    private bool $selective = false;
    private bool $persistent = false;

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

    public function addButton(KeyboardButtonArgumentInterface $button): ReplyKeyboardMarkupArgumentBuilderInterface
    {
        $this->initializeButtons();
        $this->buttons[] = [$button];

        return $this;
    }

    public function addRow(KeyboardButtonArgumentInterface ...$buttons): ReplyKeyboardMarkupArgumentBuilderInterface
    {
        $this->initializeButtons();
        $this->buttons = [...$buttons];

        return $this;
    }

    public function setResizeKeyboard(bool $resizeKeyboard): ReplyKeyboardMarkupArgumentBuilderInterface
    {
        $this->resizeKeyboard = $resizeKeyboard;

        return $this;
    }

    public function setOneTimeKeyboard(bool $oneTimeKeyboard): ReplyKeyboardMarkupArgumentBuilderInterface
    {
        $this->oneTimeKeyboard = $oneTimeKeyboard;

        return $this;
    }

    public function setInputFieldPlaceholder(string $inputFieldPlaceholder): ReplyKeyboardMarkupArgumentBuilderInterface
    {
        $this->inputFieldPlaceholder = $inputFieldPlaceholder;

        return $this;
    }

    public function setSelective(bool $selective): ReplyKeyboardMarkupArgumentBuilderInterface
    {
        $this->selective = $selective;

        return $this;
    }

    public function setPersistent(bool $persistent): ReplyKeyboardMarkupArgumentBuilderInterface
    {
        $this->persistent = $persistent;

        return $this;
    }

    public function build(): ReplyKeyboardMarkupArgumentInterface
    {
        if (empty($this->buttons)) {
            throw new \InvalidArgumentException('Для отправки клавиатуры необходимо добавить минимум одну кнопку.');
        }

        if (null !== $this->buttonsCountPerLine && $this->buttonsCountPerLine > 0) {
            $this->buttons = $this->prepareButtons();
        }

        $keyboard = new ReplyKeyboardMarkupArgument(
            $this->buttons,
            $this->persistent,
            $this->resizeKeyboard,
            $this->oneTimeKeyboard,
            $this->inputFieldPlaceholder,
            $this->selective,
        );
        $this->resetBuilder();

        return $keyboard;
    }

    private function resetBuilder(): void
    {
        $this->buttons = null;
        $this->inputFieldPlaceholder = null;
        $this->buttonsCountPerLine = null;
        $this->persistent = false;
        $this->oneTimeKeyboard = false;
        $this->selective = false;
        $this->resizeKeyboard = false;
    }
}
