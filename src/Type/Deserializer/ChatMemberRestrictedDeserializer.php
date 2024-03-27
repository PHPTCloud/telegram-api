<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Deserializer;

use PHPTCloud\TelegramApi\AbstractDeserializer;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatMemberRestrictedInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\ChatMemberRestrictedDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\UserDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\ChatMemberRestrictedTypeFactoryInterface;

/**
 * @author  Пешко Илья peshkoi@mail.ru
 */
class ChatMemberRestrictedDeserializer extends AbstractDeserializer implements ChatMemberRestrictedDeserializerInterface
{
    public function __construct(
        private readonly ChatMemberRestrictedTypeFactoryInterface $typeFactory,
        private readonly UserDeserializerInterface $userDeserializer,
    ) {
    }

    public function deserialize(array $data): ChatMemberRestrictedInterface
    {
        $status = $data[TelegramApiFieldEnum::STATUS->value] ?? null;
        $user = $this->userDeserializer->deserialize($data[TelegramApiFieldEnum::USER->value]);
        $isMember = $data[TelegramApiFieldEnum::IS_MEMBER->value] ?? null;
        $canSendMessages = $data[TelegramApiFieldEnum::CAN_SEND_MESSAGES->value] ?? null;
        $canSendAudios = $data[TelegramApiFieldEnum::CAN_SEND_AUDIOS->value] ?? null;
        $canSendDocuments = $data[TelegramApiFieldEnum::CAN_SEND_DOCUMENTS->value] ?? null;
        $canSendPhotos = $data[TelegramApiFieldEnum::CAN_SEND_PHOTOS->value] ?? null;
        $canSendVideos = $data[TelegramApiFieldEnum::CAN_SEND_VIDEOS->value] ?? null;
        $canSendVideoNotes = $data[TelegramApiFieldEnum::CAN_SEND_VIDEO_NOTES->value] ?? null;
        $canSendVoiceNotes = $data[TelegramApiFieldEnum::CAN_SEND_VOICE_NOTES->value] ?? null;
        $canSendPolls = $data[TelegramApiFieldEnum::CAN_SEND_POLLS->value] ?? null;
        $canSendOtherMessages = $data[TelegramApiFieldEnum::CAN_SEND_OTHER_MESSAGES->value] ?? null;
        $canAddWebPagePreviews = $data[TelegramApiFieldEnum::CAN_ADD_WEB_PAGE_PREVIEWS->value] ?? null;
        $canChangeInfo = $data[TelegramApiFieldEnum::CAN_CHANGE_INFO->value] ?? null;
        $canInviteUsers = $data[TelegramApiFieldEnum::CAN_INVITE_USERS->value] ?? null;
        $canPinMessages = $data[TelegramApiFieldEnum::CAN_PIN_MESSAGES->value] ?? null;
        $canManageTopics = $data[TelegramApiFieldEnum::CAN_MANAGE_TOPICS->value] ?? null;
        $untilDate = $data[TelegramApiFieldEnum::UNTIL_DATE->value] ?? null;

        $status = $this->filterString($status);
        $isMember = $this->filterBoolean($isMember);
        $canSendMessages = $this->filterBoolean($canSendMessages);
        $canSendAudios = $this->filterBoolean($canSendAudios);
        $canSendDocuments = $this->filterBoolean($canSendDocuments);
        $canSendPhotos = $this->filterBoolean($canSendPhotos);
        $canSendVideos = $this->filterBoolean($canSendVideos);
        $canSendVideoNotes = $this->filterBoolean($canSendVideoNotes);
        $canSendVoiceNotes = $this->filterBoolean($canSendVoiceNotes);
        $canSendPolls = $this->filterBoolean($canSendPolls);
        $canSendOtherMessages = $this->filterBoolean($canSendOtherMessages);
        $canAddWebPagePreviews = $this->filterBoolean($canAddWebPagePreviews);
        $canChangeInfo = $this->filterBoolean($canChangeInfo);
        $canInviteUsers = $this->filterBoolean($canInviteUsers);
        $canPinMessages = $this->filterBoolean($canPinMessages);
        $canManageTopics = $this->filterBoolean($canManageTopics);
        $untilDate = $this->filterNumeric($untilDate);

        return $this->typeFactory->create(
            $status,
            $user,
            $isMember,
            $canSendMessages,
            $canSendAudios,
            $canSendDocuments,
            $canSendPhotos,
            $canSendVideos,
            $canSendVideoNotes,
            $canSendVoiceNotes,
            $canSendPolls,
            $canSendOtherMessages,
            $canAddWebPagePreviews,
            $canChangeInfo,
            $canInviteUsers,
            $canPinMessages,
            $canManageTopics,
            $untilDate,
        );
    }
}
