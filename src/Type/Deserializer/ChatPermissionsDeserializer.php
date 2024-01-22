<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Deserializer;

use PHPTCloud\TelegramApi\AbstractDeserializer;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatPermissionsInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\ChatPermissionsDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\ChatPermissionsTypeFactoryInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 */
class ChatPermissionsDeserializer extends AbstractDeserializer implements ChatPermissionsDeserializerInterface
{
    public function __construct(
        private readonly ChatPermissionsTypeFactoryInterface $chatPermissionsTypeFactory,
    ) {}

    public function deserialize(array $data): ChatPermissionsInterface
    {
        $sendMessages = $data[TelegramApiFieldEnum::CAN_SEND_MESSAGES->value] ?? null;
        $sendAudios = $data[TelegramApiFieldEnum::CAN_SEND_AUDIOS->value] ?? null;
        $sendDocuments = $data[TelegramApiFieldEnum::CAN_SEND_DOCUMENTS->value] ?? null;
        $sendPhotos = $data[TelegramApiFieldEnum::CAN_SEND_PHOTOS->value] ?? null;
        $sendVideos = $data[TelegramApiFieldEnum::CAN_SEND_VIDEOS->value] ?? null;
        $sendVideoNotes = $data[TelegramApiFieldEnum::CAN_SEND_VIDEO_NOTES->value] ?? null;
        $sendVoiceNotes = $data[TelegramApiFieldEnum::CAN_SEND_VOICE_NOTES->value] ?? null;
        $sendPolls = $data[TelegramApiFieldEnum::CAN_SEND_POLLS->value] ?? null;
        $sendOtherMessages = $data[TelegramApiFieldEnum::CAN_SEND_OTHER_MESSAGES->value] ?? null;
        $addWebPagePreviews = $data[TelegramApiFieldEnum::CAN_ADD_WEB_PAGE_PREVIEWS->value] ?? null;
        $changeInfo = $data[TelegramApiFieldEnum::CAN_CHANGE_INFO->value] ?? null;
        $inviteUsers = $data[TelegramApiFieldEnum::CAN_INVITE_USERS->value] ?? null;
        $pinMessages = $data[TelegramApiFieldEnum::CAN_PIN_MESSAGES->value] ?? null;
        $manageTopics = $data[TelegramApiFieldEnum::CAN_MANAGE_TOPICS->value] ?? null;

        $sendMessages = $this->filterBoolean($sendMessages);
        $sendAudios = $this->filterBoolean($sendAudios);
        $sendDocuments = $this->filterBoolean($sendDocuments);
        $sendPhotos = $this->filterBoolean($sendPhotos);
        $sendVideos = $this->filterBoolean($sendVideos);
        $sendVideoNotes = $this->filterBoolean($sendVideoNotes);
        $sendVoiceNotes = $this->filterBoolean($sendVoiceNotes);
        $sendPolls = $this->filterBoolean($sendPolls);
        $sendOtherMessages = $this->filterBoolean($sendOtherMessages);
        $addWebPagePreviews = $this->filterBoolean($addWebPagePreviews);
        $changeInfo = $this->filterBoolean($changeInfo);
        $inviteUsers = $this->filterBoolean($inviteUsers);
        $pinMessages = $this->filterBoolean($pinMessages);
        $manageTopics = $this->filterBoolean($manageTopics);

        return $this->chatPermissionsTypeFactory->create(
            $sendMessages,
            $sendAudios,
            $sendDocuments,
            $sendPhotos,
            $sendVideos,
            $sendVideoNotes,
            $sendVoiceNotes,
            $sendPolls,
            $sendOtherMessages,
            $addWebPagePreviews,
            $changeInfo,
            $inviteUsers,
            $pinMessages,
            $manageTopics,
        );
    }
}
