<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Deserializer;

use PHPTCloud\TelegramApi\AbstractDeserializer;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\UserInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\UserDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\UserTypeFactoryInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 */
class UserDeserializer extends AbstractDeserializer implements UserDeserializerInterface
{
    public function __construct(
        private readonly UserTypeFactoryInterface $userTypeFactory,
    ) {
    }

    public function deserialize(array $data): UserInterface
    {
        $id = $data['id'] ?? null;
        $isBot = $data['is_bot'] ?? null;
        $firstName = $data['first_name'] ?? null;
        $lastName = $data['last_name'] ?? null;
        $username = $data['username'] ?? null;
        $languageCode = $data['language_code'] ?? null;
        $isPremium = $data['is_premium'] ?? null;
        $isAddedToAttachmentMenu = $data['added_to_attachment_menu'] ?? null;
        $isCanJoinGroups = $data['can_join_groups'] ?? null;
        $isCanReadAllGroupMessages = $data['can_read_all_group_messages'] ?? null;
        $isSupportsInlineQueries = $data['supports_inline_queries'] ?? null;

        $id = $this->filterNumeric($id);
        $isBot = $this->filterBoolean($isBot);
        $firstName = $this->filterString($firstName);
        $lastName = $this->filterString($lastName);
        $username = $this->filterString($username);
        $languageCode = $this->filterString($languageCode);
        $isPremium = $this->filterBoolean($isPremium);
        $isAddedToAttachmentMenu = $this->filterBoolean($isAddedToAttachmentMenu);
        $isCanJoinGroups = $this->filterBoolean($isCanJoinGroups);
        $isCanReadAllGroupMessages = $this->filterBoolean($isCanReadAllGroupMessages);
        $isSupportsInlineQueries = $this->filterBoolean($isSupportsInlineQueries);

        return $this->userTypeFactory->create(
            $id,
            $isBot,
            $firstName,
            $lastName,
            $username,
            $languageCode,
            $isPremium,
            $isAddedToAttachmentMenu,
            $isCanJoinGroups,
            $isCanReadAllGroupMessages,
            $isSupportsInlineQueries,
        );
    }
}
