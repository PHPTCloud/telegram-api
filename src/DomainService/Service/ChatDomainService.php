<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\DomainService\Service;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\BanChatMemberArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ChatIdArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\DeleteChatStickerSetArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\DeleteMessageArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\DeleteMessagesArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ExportChatInviteLinkArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\GetChatMemberArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\GetChatMenuButtonArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\RevokeChatInviteLinkArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SendChatActionArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetChatAdministratorCustomTitleArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetChatDescriptionArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetChatMenuButtonArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetChatPhotoArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetChatTitleArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\UnbanChatMemberArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Factory\SerializersAbstractFactoryInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\BanChatMemberArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ChatIdArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\DeleteChatStickerSetArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\DeleteMessageArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\DeleteMessagesArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ExportChatInviteLinkArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\GetChatMemberArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\GetChatMenuButtonArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\MultipartArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\RevokeChatInviteLinkArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SendChatActionArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SetChatAdministratorCustomTitleArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SetChatDescriptionArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SetChatMenuButtonArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SetChatPhotoArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SetChatTitleArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\UnbanChatMemberArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\DomainService\Enums\TelegramApiMethodEnum;
use PHPTCloud\TelegramApi\DomainService\Interfaces\Service\ChatDomainServiceInterface;
use PHPTCloud\TelegramApi\DomainService\Interfaces\Service\SupportsSendingMultipartInterface;
use PHPTCloud\TelegramApi\DomainService\Interfaces\ValueObject\UrlValueObjectInterface;
use PHPTCloud\TelegramApi\DomainService\Traits\SupportsSendingMultipartTrait;
use PHPTCloud\TelegramApi\DomainService\ValueObject\Link;
use PHPTCloud\TelegramApi\Exception\Error\TelegramApiException;
use PHPTCloud\TelegramApi\Exception\Interfaces\ExceptionAbstractFactoryInterface;
use PHPTCloud\TelegramApi\Request\Interfaces\RequestInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatInviteLinkInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatMemberInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\MenuButtonCommandsInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\MenuButtonDefaultInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\MenuButtonWebAppInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\ChatDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\ChatInviteLinkDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\ChatMemberDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\MenuButtonDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\DeserializersAbstractFactoryInterface;

/**
 * @author  Пешко Илья peshkoi@mail.ru
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class ChatDomainService implements
    ChatDomainServiceInterface,
    SupportsSendingMultipartInterface
{
    use SupportsSendingMultipartTrait;

    public function __construct(
        private readonly RequestInterface $request,
        private readonly SerializersAbstractFactoryInterface $serializersAbstractFactory,
        private readonly DeserializersAbstractFactoryInterface $deserializersAbstractFactory,
        private readonly ExceptionAbstractFactoryInterface $exceptionAbstractFactory,
        private readonly MultipartArraySerializerInterface $multipartArraySerializer,
    ) {
    }

    public function getChat(ChatIdArgumentInterface $argument): ChatInterface
    {
        /** @var ChatIdArgumentArraySerializerInterface $serializer */
        $serializer = $this->serializersAbstractFactory->create(ChatIdArgumentArraySerializerInterface::class);
        $data = $serializer->serialize($argument);

        $response = $this->request::post(TelegramApiMethodEnum::GET_CHAT->value, $data);

        if ($response->isError()) {
            $exception = $this->exceptionAbstractFactory->createByApiErrorMessage($response->getErrorMessage());
            if ($exception) {
                throw $exception;
            }
            throw new TelegramApiException($response->getErrorMessage(), $response->getCode());
        }

        /** @var ChatDeserializerInterface $deserializer */
        $deserializer = $this->deserializersAbstractFactory->create(ChatDeserializerInterface::class);

        return $deserializer->deserialize($response->getResponseData()[RequestInterface::RESULT_KEY]);
    }

    public function sendChatAction(SendChatActionArgumentInterface $argument): bool
    {
        /** @var SendChatActionArgumentArraySerializerInterface $serializer */
        $serializer = $this->serializersAbstractFactory->create(SendChatActionArgumentArraySerializerInterface::class);
        $data = $serializer->serialize($argument);

        $response = $this->request::post(TelegramApiMethodEnum::SEND_CHAT_ACTION->value, $data);

        if ($response->isError()) {
            $exception = $this->exceptionAbstractFactory->createByApiErrorMessage($response->getErrorMessage());
            if ($exception) {
                throw $exception;
            }
            throw new TelegramApiException($response->getErrorMessage(), $response->getCode());
        }

        return $response->getResponseData()[RequestInterface::RESULT_KEY] ?? false;
    }

    public function setChatPhoto(SetChatPhotoArgumentInterface $argument): bool
    {
        /** @var SetChatPhotoArgumentArraySerializerInterface $serializer */
        $serializer = $this->serializersAbstractFactory->create(SetChatPhotoArgumentArraySerializerInterface::class);

        $response = $this->sendMultipart($serializer, $argument, TelegramApiMethodEnum::SET_CHAT_PHOTO->value);

        return $response->getResponseData()[RequestInterface::RESULT_KEY] ?? false;
    }

    public function deleteChatPhoto(ChatIdArgumentInterface $argument): bool
    {
        $serializer = $this->serializersAbstractFactory->create(ChatIdArgumentArraySerializerInterface::class);
        $data = $serializer->serialize($argument);

        $response = $this->request::post(TelegramApiMethodEnum::DELETE_CHAT_PHOTO->value, $data);

        if ($response->isError()) {
            $exception = $this->exceptionAbstractFactory->createByApiErrorMessage($response->getErrorMessage());
            if ($exception) {
                throw $exception;
            }
            throw new TelegramApiException($response->getErrorMessage(), $response->getCode());
        }

        return $response->getResponseData()[RequestInterface::RESULT_KEY] ?? false;
    }

    public function leaveChat(ChatIdArgumentInterface $argument): bool
    {
        /** @var ChatIdArgumentArraySerializerInterface $serializer */
        $serializer = $this->serializersAbstractFactory->create(ChatIdArgumentArraySerializerInterface::class);
        $data = $serializer->serialize($argument);

        $response = $this->request::post(TelegramApiMethodEnum::LEAVE_CHAT->value, $data);

        if ($response->isError()) {
            $exception = $this->exceptionAbstractFactory->createByApiErrorMessage($response->getErrorMessage());
            if ($exception) {
                throw $exception;
            }
            throw new TelegramApiException($response->getErrorMessage(), $response->getCode());
        }

        return $response->getResponseData()[RequestInterface::RESULT_KEY] ?? false;
    }

    public function setChatTitle(SetChatTitleArgumentInterface $argument): bool
    {
        /** @var SetChatTitleArgumentArraySerializerInterface $serializer */
        $serializer = $this->serializersAbstractFactory->create(SetChatTitleArgumentArraySerializerInterface::class);
        $data = $serializer->serialize($argument);

        $response = $this->request::post(TelegramApiMethodEnum::SET_CHAT_TITLE->value, $data);

        if ($response->isError()) {
            $exception = $this->exceptionAbstractFactory->createByApiErrorMessage($response->getErrorMessage());
            if ($exception) {
                throw $exception;
            }
            throw new TelegramApiException($response->getErrorMessage(), $response->getCode());
        }

        return $response->getResponseData()[RequestInterface::RESULT_KEY] ?? false;
    }

    public function setChatDescription(SetChatDescriptionArgumentInterface $argument): bool
    {
        /** @var SetChatDescriptionArgumentArraySerializerInterface $serializer */
        $serializer = $this->serializersAbstractFactory->create(SetChatDescriptionArgumentArraySerializerInterface::class);
        $data = $serializer->serialize($argument);

        $response = $this->request::post(TelegramApiMethodEnum::SET_CHAT_DESCRIPTION->value, $data);

        if ($response->isError()) {
            $exception = $this->exceptionAbstractFactory->createByApiErrorMessage($response->getErrorMessage());
            if ($exception) {
                throw $exception;
            }
            throw new TelegramApiException($response->getErrorMessage(), $response->getCode());
        }

        return $response->getResponseData()[RequestInterface::RESULT_KEY] ?? false;
    }

    public function getChatMemberCount(ChatIdArgumentInterface $argument): int
    {
        /** @var ChatIdArgumentArraySerializerInterface $serializer */
        $serializer = $this->serializersAbstractFactory->create(ChatIdArgumentArraySerializerInterface::class);
        $data = $serializer->serialize($argument);

        $response = $this->request::post(TelegramApiMethodEnum::GET_CHAT_MEMBER_COUNT->value, $data);

        if ($response->isError()) {
            $exception = $this->exceptionAbstractFactory->createByApiErrorMessage($response->getErrorMessage());
            if ($exception) {
                throw $exception;
            }
            throw new TelegramApiException($response->getErrorMessage(), $response->getCode());
        }

        return $response->getResponseData()[RequestInterface::RESULT_KEY];
    }

    public function getChatMember(GetChatMemberArgumentInterface $argument): ChatMemberInterface
    {
        /** @var GetChatMemberArgumentArraySerializerInterface $serializer */
        $serializer = $this->serializersAbstractFactory->create(GetChatMemberArgumentArraySerializerInterface::class);
        $data = $serializer->serialize($argument);

        $response = $this->request::post(TelegramApiMethodEnum::GET_CHAT_MEMBER->value, $data);

        if ($response->isError()) {
            $exception = $this->exceptionAbstractFactory->createByApiErrorMessage($response->getErrorMessage());
            if ($exception) {
                throw $exception;
            }
            throw new TelegramApiException($response->getErrorMessage(), $response->getCode());
        }

        /** @var ChatMemberDeserializerInterface $deserializer */
        $deserializer = $this->deserializersAbstractFactory->create(ChatMemberDeserializerInterface::class);

        return $deserializer->deserialize($response->getResponseData()[RequestInterface::RESULT_KEY]);
    }

    public function banChatMember(BanChatMemberArgumentInterface $argument): bool
    {
        /** @var BanChatMemberArgumentArraySerializerInterface $serializer */
        $serializer = $this->serializersAbstractFactory->create(BanChatMemberArgumentArraySerializerInterface::class);
        $data = $serializer->serialize($argument);

        $response = $this->request::post(TelegramApiMethodEnum::BAN_CHAT_MEMBER->value, $data);

        if ($response->isError()) {
            $exception = $this->exceptionAbstractFactory->createByApiErrorMessage($response->getErrorMessage());
            if ($exception) {
                throw $exception;
            }
            throw new TelegramApiException($response->getErrorMessage(), $response->getCode());
        }

        return $response->getResponseData()[RequestInterface::RESULT_KEY];
    }

    public function unbanChatMember(UnbanChatMemberArgumentInterface $argument): bool
    {
        /** @var UnbanChatMemberArgumentArraySerializerInterface $serializer */
        $serializer = $this->serializersAbstractFactory->create(UnbanChatMemberArgumentArraySerializerInterface::class);
        $data = $serializer->serialize($argument);

        $response = $this->request::post(TelegramApiMethodEnum::UNBAN_CHAT_MEMBER->value, $data);

        if ($response->isError()) {
            $exception = $this->exceptionAbstractFactory->createByApiErrorMessage($response->getErrorMessage());
            if ($exception) {
                throw $exception;
            }
            throw new TelegramApiException($response->getErrorMessage(), $response->getCode());
        }

        return $response->getResponseData()[RequestInterface::RESULT_KEY];
    }

    public function setChatAdministratorCustomTitle(SetChatAdministratorCustomTitleArgumentInterface $argument): bool
    {
        /** @var SetChatAdministratorCustomTitleArgumentArraySerializerInterface $serializer */
        $serializer = $this->serializersAbstractFactory->create(SetChatAdministratorCustomTitleArgumentArraySerializerInterface::class);
        $data = $serializer->serialize($argument);

        $response = $this->request::post(TelegramApiMethodEnum::SET_CHAT_ADMINISTRATOR_CUSTOM_TITLE->value, $data);

        if ($response->isError()) {
            $exception = $this->exceptionAbstractFactory->createByApiErrorMessage($response->getErrorMessage());
            if ($exception) {
                throw $exception;
            }
            throw new TelegramApiException($response->getErrorMessage(), $response->getCode());
        }

        return $response->getResponseData()[RequestInterface::RESULT_KEY];
    }

    public function exportChatInviteLink(ExportChatInviteLinkArgumentInterface $argument): UrlValueObjectInterface
    {
        /** @var ExportChatInviteLinkArgumentArraySerializerInterface $serializer */
        $serializer = $this->serializersAbstractFactory->create(ExportChatInviteLinkArgumentArraySerializerInterface::class);
        $data = $serializer->serialize($argument);

        $response = $this->request::post(TelegramApiMethodEnum::EXPORT_CHAT_INVITE_LINK->value, $data);

        if ($response->isError()) {
            $exception = $this->exceptionAbstractFactory->createByApiErrorMessage($response->getErrorMessage());
            if ($exception) {
                throw $exception;
            }
            throw new TelegramApiException($response->getErrorMessage(), $response->getCode());
        }

        return new Link($response->getResponseData()[RequestInterface::RESULT_KEY]);
    }

    public function revokeChatInviteLink(RevokeChatInviteLinkArgumentInterface $argument): ChatInviteLinkInterface
    {
        /** @var RevokeChatInviteLinkArgumentArraySerializerInterface $serializer */
        $serializer = $this->serializersAbstractFactory->create(RevokeChatInviteLinkArgumentArraySerializerInterface::class);
        $data = $serializer->serialize($argument);

        $response = $this->request::post(TelegramApiMethodEnum::REVOKE_CHAT_INVITE_LINK->value, $data);

        if ($response->isError()) {
            $exception = $this->exceptionAbstractFactory->createByApiErrorMessage($response->getErrorMessage());
            if ($exception) {
                throw $exception;
            }
            throw new TelegramApiException($response->getErrorMessage(), $response->getCode());
        }

        /** @var ChatInviteLinkDeserializerInterface $deserializer */
        $deserializer = $this->deserializersAbstractFactory->create(ChatInviteLinkDeserializerInterface::class);

        return $deserializer->deserialize($response->getResponseData()[RequestInterface::RESULT_KEY]);
    }

    public function deleteMessages(DeleteMessagesArgumentInterface $argument): bool
    {
        /** @var DeleteMessagesArgumentArraySerializerInterface $serializer */
        $serializer = $this->serializersAbstractFactory->create(DeleteMessagesArgumentArraySerializerInterface::class);
        $data = $serializer->serialize($argument);

        $response = $this->request::post(TelegramApiMethodEnum::DELETE_MESSAGES->value, $data);

        if ($response->isError()) {
            $exception = $this->exceptionAbstractFactory->createByApiErrorMessage($response->getErrorMessage());
            if ($exception) {
                throw $exception;
            }
            throw new TelegramApiException($response->getErrorMessage(), $response->getCode());
        }

        return $response->getResponseData()[RequestInterface::RESULT_KEY];
    }

    public function deleteMessage(DeleteMessageArgumentInterface $argument): bool
    {
        /** @var DeleteMessageArgumentArraySerializerInterface $serializer */
        $serializer = $this->serializersAbstractFactory->create(DeleteMessageArgumentArraySerializerInterface::class);
        $data = $serializer->serialize($argument);

        $response = $this->request::post(TelegramApiMethodEnum::DELETE_MESSAGE->value, $data);

        if ($response->isError()) {
            $exception = $this->exceptionAbstractFactory->createByApiErrorMessage($response->getErrorMessage());
            if ($exception) {
                throw $exception;
            }
            throw new TelegramApiException($response->getErrorMessage(), $response->getCode());
        }

        return $response->getResponseData()[RequestInterface::RESULT_KEY];
    }

    public function getChatMenuButton(
        GetChatMenuButtonArgumentInterface $argument,
    ): MenuButtonCommandsInterface|MenuButtonDefaultInterface|MenuButtonWebAppInterface {
        /** @var GetChatMenuButtonArgumentArraySerializerInterface $serializer */
        $serializer = $this->serializersAbstractFactory->create(GetChatMenuButtonArgumentArraySerializerInterface::class);
        $data = $serializer->serialize($argument);

        $response = $this->request::get(TelegramApiMethodEnum::GET_CHAT_MENU_BUTTON->value, $data);

        if ($response->isError()) {
            $exception = $this->exceptionAbstractFactory->createByApiErrorMessage($response->getErrorMessage());
            if ($exception) {
                throw $exception;
            }
            throw new TelegramApiException($response->getErrorMessage(), $response->getCode());
        }

        /** @var MenuButtonDeserializerInterface $deserializer */
        $deserializer = $this->deserializersAbstractFactory->create(MenuButtonDeserializerInterface::class);

        return $deserializer->deserialize($response->getResponseData()[RequestInterface::RESULT_KEY]);
    }

    public function setChatMenuButton(SetChatMenuButtonArgumentInterface $argument): bool
    {
        /** @var SetChatMenuButtonArgumentArraySerializerInterface $serializer */
        $serializer = $this->serializersAbstractFactory->create(SetChatMenuButtonArgumentArraySerializerInterface::class);
        $data = $serializer->serialize($argument);
        $data[TelegramApiFieldEnum::MENU_BUTTON->value] = json_encode($data[TelegramApiFieldEnum::MENU_BUTTON->value]);

        $response = $this->request::get(TelegramApiMethodEnum::SET_CHAT_MENU_BUTTON->value, $data);

        if ($response->isError()) {
            $exception = $this->exceptionAbstractFactory->createByApiErrorMessage($response->getErrorMessage());
            if ($exception) {
                throw $exception;
            }
            throw new TelegramApiException($response->getErrorMessage(), $response->getCode());
        }

        return true;
    }

    public function deleteChatStickerSet(DeleteChatStickerSetArgumentInterface $argument): bool
    {
        /** @var DeleteChatStickerSetArgumentArraySerializerInterface $serializer */
        $serializer = $this->serializersAbstractFactory->create(DeleteChatStickerSetArgumentArraySerializerInterface::class);
        $data = $serializer->serialize($argument);

        $response = $this->request::get(TelegramApiMethodEnum::DELETE_CHAT_STICKER_SET->value, $data);

        if ($response->isError()) {
            $exception = $this->exceptionAbstractFactory->createByApiErrorMessage($response->getErrorMessage());
            if ($exception) {
                throw $exception;
            }
            throw new TelegramApiException($response->getErrorMessage(), $response->getCode());
        }

        return true;
    }
}
