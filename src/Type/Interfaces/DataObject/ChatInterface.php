<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 * @version 1.0.0
 *
 * Этот объект представляет собой чат.
 * @link    https://core.telegram.org/bots/api#chat
 */
interface ChatInterface
{
    /**
     * Уникальный идентификатор этого чата. Это число может иметь более 32 значащих битов, и в некоторых яз
     * ыках программирования могут возникнуть трудности или неявные дефекты при его интерпретации. Но он им
     * еет не более 52 значащих битов, поэтому 64-битное целое число со знаком или тип с плавающей запятой
     * двойной точности безопасны для хранения этого идентификатора.
     *
     * @return int|float
     */
    public function getId(): int|float;

    /**
     * Тип чата может быть «private», «group», «supergroup» или «channel».
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Необязательный. Заголовок для супергрупп, каналов и групповых чатов.
     *
     * @return string|null
     */
    public function getTitle(): ?string;

    /**
     * Необязательный. Имя пользователя для частных чатов, супергрупп и каналов, если они доступны.
     *
     * @return string|null
     */
    public function getUsername(): ?string;

    /**
     * Необязательный. Имя собеседника в приватном чате.
     *
     * @return string|null
     */
    public function getFirstName(): ?string;

    /**
     * Необязательный. Фамилия собеседника в приватном чате.
     *
     * @return string|null
     */
    public function getLastName(): ?string;

    /**
     * Необязательный. Правда, если чат супергруппы является форумом (с включенными темами)
     *
     * @link Topics - https://telegram.org/blog/topics-in-groups-collectible-usernames/ru?ln=a#topics-in-groups
     *
     * @return bool|null
     */
    public function isForum(): ?bool;

    /**
     * Необязательный. Фото из чата. Вернулся только в getChat.
     *
     * @return ChatPhotoInterface|null
     */
    public function getPhoto(): ?ChatPhotoInterface;

    /**
     * Необязательный. Если не пусто, список всех активных имен пользователей чата; для приватных чатов, су
     * пергрупп и каналов. Вернулся только в getChat.
     *
     * @return string[]|null
     */
    public function getActiveUsernames(): ?array;

    /**
     * Необязательный. Список доступных реакций, разрешенных в чате. Если этот параметр опущен, разрешены в
     * се реакции эмодзи. Вернулся только в getChat.
     *
     * @return ReactionTypeInterface[]|null
     */
    public function getAvailableReactions(): ?array;

    /**
     * Необязательный. Идентификатор цвета акцента для имени чата и фона фотографии чата, заголовка ответа
     * и предварительного просмотра ссылки. Более подробную информацию смотрите в акцентных цветах. Вернулс
     * я только в getChat. Всегда возвращается в getChat.
     *
     * @return int|null
     */
    public function getAccentColorId(): ?int;

    /**
     * Необязательный. Пользовательский идентификатор смайлика, выбранного чатом для заголовка ответа и фон
     * а предварительного просмотра ссылки. Вернулся только в getChat.
     *
     * @return string|null
     */
    public function getBackgroundCustomEmojiId(): ?string;

    /**
     * Необязательный. Идентификатор акцентного цвета фона профиля чата. Более подробную информацию смотрит
     * е в акцентных цветах профиля. Вернулся только в getChat.
     *
     * @return int|null
     */
    public function getProfileAccentColorId(): ?int;

    /**
     * Необязательный. Пользовательский идентификатор смайлика, выбранного чатом для фона своего профиля. В
     * ернулся только в getChat.
     *
     * @return string|null
     */
    public function getProfileBackgroundCustomEmojiId(): ?string;

    /**
     * Необязательный. Пользовательский идентификатор смайлика, указывающий статус смайлика чата или другог
     * о участника в приватном чате. Вернулся только в getChat.
     *
     * @return string|null
     */
    public function getEmojiStatusCustomEmojiId(): ?string;

    /**
     * Необязательный. Срок действия эмодзи-статуса чата или другого участника в приватном чате по времени
     * Unix, если таковой имеется. Вернулся только в getChat.
     *
     * @return int|null
     */
    public function getEmojiStatusExpirationDate(): ?int;

    /**
     * Необязательный. Биография собеседника в приватном чате. Вернулся только в getChat.
     *
     * @return string|null
     */
    public function getBio(): ?string;

    /**
     * Необязательный. Правда, если настройки приватности собеседника в приватном чате позволяют использова
     * ть ссылки tg://user?id=<user_id> только в чатах с пользователем. Вернулся только в getChat.
     *
     * @return bool|null
     */
    public function hasPrivateForwards(): ?bool;

    /**
     * Необязательный. Правда, если настройки приватности собеседника запрещают отправку голосовых и видеоз
     * аметок в приватный чат. Вернулся только в getChat.
     *
     * @return bool|null
     */
    public function hasRestrictedVoiceAndVideoMessages(): ?bool;

    /**
     * Необязательный. Верно, если пользователям необходимо присоединиться к супергруппе, прежде чем они см
     * огут отправлять сообщения. Вернулся только в getChat.
     *
     * @return bool|null
     */
    public function isJoinToSendMessages(): ?bool;

    /**
     * Необязательный. Правда, если все пользователи, непосредственно вступающие в супергруппу, должны быть
     * одобрены администраторами супергруппы. Вернулся только в getChat.
     *
     * @return bool|null
     */
    public function isJoinByRequest(): ?bool;

    /**
     * Необязательный. Описание для групп, супергрупп и чатов канала. Вернулся только в getChat.
     *
     * @return string|null
     */
    public function getDescription(): ?string;

    /**
     * Необязательный. Основная ссылка для приглашения для групп, супергрупп и чатов канала. Вернулся тольк
     * о в getChat.
     *
     * @return string|null
     */
    public function getInviteLink(): ?string;

    /**
     * Необязательный. Самое последнее закрепленное сообщение (по дате отправки). Вернулся только в getChat.
     *
     * @return MessageInterface|null
     */
    public function getPinnedMessage(): ?MessageInterface;

    /**
     * Необязательный. Разрешения участников чата по умолчанию для групп и супергрупп. Вернулся только в ge
     * tChat.
     *
     * @return ChatPermissionsInterface|null
     */
    public function getPermissions(): ?ChatPermissionsInterface;

    /**
     * Необязательный. Для супергрупп — минимальная допустимая задержка между последовательными сообщениями
     * , отправляемыми каждым непривилегированным пользователем; в секундах. Вернулся только в getChat.
     *
     * @return int|null
     */
    public function getSlowModeDelay(): ?int;

    /**
     * Необязательный. Время, по истечении которого все сообщения, отправленные в чат, будут автоматически
     * удалены; в секундах. Вернулся только в getChat.
     *
     * @return int|null
     */
    public function getMessageAutoDeleteTime(): ?int;

    /**
     * Необязательный. Правда, если в супергруппе включены агрессивные проверки на спам. Поле доступно толь
     * ко администраторам чата. Вернулся только в getChat.
     *
     * @return bool|null
     */
    public function hasAggressiveAntiSpamEnabled(): ?bool;

    /**
     * Необязательный. Правда, если неадминистраторы смогут получить только список ботов и администраторов
     * в чате. Вернулся только в getChat.
     *
     * @return bool|null
     */
    public function hasHiddenMembers(): ?bool;

    /**
     * Необязательный. Правда, если сообщения из чата нельзя пересылать в другие чаты. Вернулся только в ge
     * tChat.
     *
     * @return bool|null
     */
    public function hasProtectedContent(): ?bool;

    /**
     * Необязательный. Правда, если новые участники чата будут иметь доступ к старым сообщениям; доступно т
     * олько администраторам чата. Вернулся только в getChat.
     *
     * @return bool|null
     */
    public function hasVisibleHistory(): ?bool;

    /**
     * Необязательный. Для супергрупп — название набора стикеров группы. Вернулся только в getChat.
     *
     * @return string|null
     */
    public function getStickerSetName(): ?string;

    /**
     * Необязательный. Правда, если бот сможет изменить набор стикеров группы. Вернулся только в getChat.
     *
     * @return bool|null
     */
    public function canSetStickerSet(): ?bool;

    /**
     * Необязательный. Уникальный идентификатор связанного чата, т. е. идентификатор дискуссионной группы д
     * ля канала и наоборот; для супергрупп и чатов канала. Этот идентификатор может быть больше 32 бит, и
     * в некоторых языках программирования могут возникнуть трудности или неявные дефекты при его интерпрет
     * ации. Но он меньше 52 бит, поэтому 64-битное целое число со знаком или тип с плавающей запятой двойн
     * ой точности безопасны для хранения этого идентификатора. Вернулся только в getChat.
     *
     * @return int|float|null
     */
    public function getLinkedChatId(): null|int|float;

    /**
     * Необязательный. Для супергрупп — расположение, к которому подключена супергруппа. Вернулся только в
     * getChat.
     *
     * @return LocationInterface|null
     */
    public function getLocation(): ?LocationInterface;
}
