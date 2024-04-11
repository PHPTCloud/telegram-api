<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Deserializer;

use PHPTCloud\TelegramApi\AbstractDeserializer;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;
use PHPTCloud\TelegramApi\Type\Enums\MenuButtonEnum;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\MenuButtonCommandsInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\MenuButtonDefaultInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\MenuButtonWebAppInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\MenuButtonDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\WebAppInfoDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\MenuButtonCommandsTypeFactoryInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\MenuButtonDefaultTypeFactoryInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\MenuButtonWebAppTypeFactoryInterface;

class MenuButtonDeserializer extends AbstractDeserializer implements MenuButtonDeserializerInterface
{
    public function __construct(
        private readonly MenuButtonDefaultTypeFactoryInterface $menuButtonDefaultTypeFactory,
        private readonly MenuButtonCommandsTypeFactoryInterface $menuButtonCommandsTypeFactory,
        private readonly MenuButtonWebAppTypeFactoryInterface $menuButtonWebAppTypeFactory,
        private readonly WebAppInfoDeserializerInterface $webAppInfoDeserializer,
    ) {
    }

    public function deserialize(array $data): MenuButtonCommandsInterface|MenuButtonDefaultInterface|MenuButtonWebAppInterface
    {
        if (!isset($data[TelegramApiFieldEnum::TYPE->value])) {
            throw new \InvalidArgumentException('Невозможно десериализовать данные.');
        }

        $type = $data[TelegramApiFieldEnum::TYPE->value];

        if ($type === MenuButtonEnum::COMMANDS->value) {
            return $this->deserializeMenuButtonCommands($data);
        } elseif ($type === MenuButtonEnum::DEFAULT->value) {
            return $this->deserializeMenuButtonDefault($data);
        } elseif ($type === MenuButtonEnum::WEB_APP->value) {
            return $this->deserializeMenuButtonWebApp($data);
        }

        throw new \InvalidArgumentException('Невозможно десериализовать данные.');
    }

    private function deserializeMenuButtonCommands(array $data): MenuButtonCommandsInterface
    {
        return $this->menuButtonCommandsTypeFactory->create();
    }

    private function deserializeMenuButtonDefault(array $data): MenuButtonDefaultInterface
    {
        return $this->menuButtonDefaultTypeFactory->create();
    }

    private function deserializeMenuButtonWebApp(array $data): MenuButtonWebAppInterface
    {
        $text = $data[TelegramApiFieldEnum::TEXT->value] ?? null;
        $webApp = $data[TelegramApiFieldEnum::WEB_APP->value] ?? null;

        $text = $this->filterString($text);
        $webApp = $this->webAppInfoDeserializer->deserialize($webApp);

        return $this->menuButtonWebAppTypeFactory->create($text, $webApp);
    }
}
