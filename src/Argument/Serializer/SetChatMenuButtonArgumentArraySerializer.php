<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\DataObject\SetChatMenuButtonArgument;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\MenuButtonCommandsArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\MenuButtonDefaultArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\MenuButtonWebAppArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SetChatMenuButtonArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;
use PHPTCloud\TelegramApi\Type\Enums\MenuButtonEnum;

class SetChatMenuButtonArgumentArraySerializer implements SetChatMenuButtonArgumentArraySerializerInterface
{
    public function __construct(
        private readonly MenuButtonDefaultArgumentArraySerializerInterface $menuButtonDefaultArgumentArraySerializer,
        private readonly MenuButtonCommandsArgumentArraySerializerInterface $menuButtonCommandsArgumentArraySerializer,
        private readonly MenuButtonWebAppArgumentArraySerializerInterface $menuButtonWebAppArgumentArraySerializer,
    ) {
    }

    public function serialize(SetChatMenuButtonArgument $argument): array
    {
        $data = [];

        if ($argument->getChatId()) {
            $data[TelegramApiFieldEnum::CHAT_ID->value] = $argument->getChatId();
        }

        if ($argument->getMenuButton()->getType() === MenuButtonEnum::DEFAULT->value) {
            $data[TelegramApiFieldEnum::MENU_BUTTON->value]
                = $this->menuButtonDefaultArgumentArraySerializer->serialize($argument->getMenuButton());
        } elseif ($argument->getMenuButton()->getType() === MenuButtonEnum::COMMANDS->value) {
            $data[TelegramApiFieldEnum::MENU_BUTTON->value]
                = $this->menuButtonCommandsArgumentArraySerializer->serialize($argument->getMenuButton());
        } elseif ($argument->getMenuButton()->getType() === MenuButtonEnum::WEB_APP->value) {
            $data[TelegramApiFieldEnum::MENU_BUTTON->value]
                = $this->menuButtonWebAppArgumentArraySerializer->serialize($argument->getMenuButton());
        }

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
