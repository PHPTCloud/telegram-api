<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Builder;

use PHPTCloud\TelegramApi\Argument\DataObject\MessageArgument;
use PHPTCloud\TelegramApi\Argument\Interfaces\MessageArgumentInterface;
use PHPTCloud\TelegramApi\Type\DataObject\LinkPreviewOptions;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ForceReplyInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\InlineKeyboardMarkupInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\MessageEntityInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ReplyKeyboardMarkupInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ReplyKeyboardRemoveInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ReplyParametersInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 * @see     \PHPTCloud\TelegramApi\Argument\Interfaces\MessageArgumentInterface
 */
class MessageArgumentBuilder implements MessageArgumentBuilderInterface
{
    private ?MessageArgumentInterface $messageArgument = null;

    public function setChatId(float|int|string $chatId): MessageArgumentBuilderInterface
    {
        $this->initializeArgumentInstance();

        $this->messageArgument->setChatId($chatId);

        return $this;
    }

    public function setText(string $text): MessageArgumentBuilderInterface
    {
        $this->initializeArgumentInstance();

        $this->messageArgument->setText($text);

        return $this;
    }

    public function setMessageThreadId(int $messageThreadId): MessageArgumentBuilderInterface
    {
        $this->initializeArgumentInstance();

        $this->messageArgument->setMessageThreadId($messageThreadId);

        return $this;
    }

    public function setParseMode(?string $parseMode = null): MessageArgumentBuilderInterface
    {
        $this->initializeArgumentInstance();

        $this->messageArgument->setParseMode($parseMode);

        return $this;
    }

    public function setEntities(?array $entities = null): MessageArgumentBuilderInterface
    {
        $this->initializeArgumentInstance();

        $this->messageArgument->setEntities($entities);

        return $this;
    }

    public function addEntity(MessageEntityInterface $entity): MessageArgumentBuilderInterface
    {
        $this->initializeArgumentInstance();

        if (empty($this->messageArgument->getEntities())) {
            $this->messageArgument->setEntities([]);
        }

        $this->messageArgument->addEntity($entity);

        return $this;
    }

    public function setLinkPreviewOptions(LinkPreviewOptions $linkPreviewOptions): MessageArgumentBuilderInterface
    {
        $this->initializeArgumentInstance();

        $this->messageArgument->setLinkPreviewOptions($linkPreviewOptions);

        return $this;
    }

    public function setNotificationDisabled(bool $notificationDisabled): MessageArgumentBuilderInterface
    {
        $this->initializeArgumentInstance();

        $this->messageArgument->setNotificationDisabled($notificationDisabled);

        return $this;
    }

    public function setContentProtected(bool $contentProtected): MessageArgumentBuilderInterface
    {
        $this->initializeArgumentInstance();

        $this->messageArgument->setContentProtected($contentProtected);

        return $this;
    }

    public function setReplyParameters(ReplyParametersInterface $replyParameters): MessageArgumentBuilderInterface
    {
        $this->initializeArgumentInstance();

        $this->messageArgument->setReplyParameters($replyParameters);

        return $this;
    }

    public function setReplyMarkup(InlineKeyboardMarkupInterface|ReplyKeyboardMarkupInterface|ReplyKeyboardRemoveInterface|ForceReplyInterface $replyMarkup): MessageArgumentBuilderInterface
    {
        $this->initializeArgumentInstance();

        $this->messageArgument->setReplyMarkup($replyMarkup);

        return $this;
    }

    public function setInlineKeyboardMarkup(InlineKeyboardMarkupInterface $replyMarkup): MessageArgumentBuilderInterface
    {
        $this->initializeArgumentInstance();

        $this->messageArgument->setReplyMarkup($replyMarkup);

        return $this;
    }

    public function setReplyKeyboardMarkup(ReplyKeyboardMarkupInterface $replyMarkup): MessageArgumentBuilderInterface
    {
        $this->initializeArgumentInstance();

        $this->messageArgument->setReplyMarkup($replyMarkup);

        return $this;
    }

    public function setReplyKeyboardRemove(ReplyKeyboardRemoveInterface $replyMarkup): MessageArgumentBuilderInterface
    {
        $this->initializeArgumentInstance();

        $this->messageArgument->setReplyMarkup($replyMarkup);

        return $this;
    }

    public function setForceReply(ForceReplyInterface $replyMarkup): MessageArgumentBuilderInterface
    {
        $this->initializeArgumentInstance();

        $this->messageArgument->setReplyMarkup($replyMarkup);

        return $this;
    }

    public function build(): MessageArgumentInterface
    {
        if (!$this->messageArgument) {
            throw new \RuntimeException(
                sprintf(
                    'Объект %s невозможно построить. Убедитесь в том, что все обязательные поля заполнены.',
                    $this->messageArgument::class,
                ),
            );
        }

        $argument = $this->messageArgument;
        $this->messageArgument = null;

        return $argument;
    }

    private function initializeArgumentInstance(): void
    {
        if (!$this->messageArgument) {
            $this->messageArgument = new MessageArgument();
        }
    }
}
