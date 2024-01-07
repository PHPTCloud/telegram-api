<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 *
 * Этот объект представляет сообщение.
 * @link    https://core.telegram.org/bots/api#message
 */
interface MessageInterface
{
    /**
     * Уникальный идентификатор сообщения внутри этого чата.
     *
     * @return int|float
     */
    public function getMessageId(): int|float;

    /**
     * Необязательный. Уникальный идентификатор потока сообщений, к которому принадлежит сообщение; только
     * для супергрупп.
     *
     * @return int|float|null
     */
    public function getMessageThreadId(): int|float|null;

    /**
     * Необязательный. Отправитель сообщения; пусто для сообщений, отправленных в каналы. Для обратной совм
     * естимости в неканальных чатах поле содержит фиктивного пользователя-отправителя, если сообщение было
     * отправлено от имени чата.
     *
     * @return UserInterface|null
     */
    public function getFrom(): ?UserInterface;

    /**
     * Необязательный. Отправитель сообщения, отправленного от имени чата. Например, сам канал для публикац
     * ий канала, сама супергруппа для сообщений от администраторов анонимных групп, связанный канал для со
     * общений, автоматически пересылаемых в дискуссионную группу. Для обратной совместимости поле from сод
     * ержит поддельного пользователя-отправителя в неканальных чатах, если сообщение было отправлено от им
     * ени чата.
     *
     * @return ChatInterface|null
     */
    public function getSenderChat(): ?ChatInterface;

    /**
     * Дата отправки сообщения по времени Unix. Это всегда положительное число, обозначающее действительную
     * дату.
     *
     * @return int|float
     */
    public function getDate(): int|float;

    /**
     * Чат, которому принадлежит сообщение.
     *
     * @return ChatInterface
     */
    public function getChat(): ChatInterface;

    /**
     * Необязательный. Информация об исходном сообщении для пересылаемых сообщений.
     *
     * @return MessageOriginInterface|null
     */
    public function getForwardOrigin(): ?MessageOriginInterface;

    /**
     * Необязательный. Правда, если сообщение отправлено в тему форума.
     *
     * @return bool|null
     */
    public function isTopicMessage(): ?bool;

    /**
     * Необязательный. Верно, если сообщение представляет собой публикацию канала, которая была автоматичес
     * ки перенаправлена в подключенную группу обсуждений.
     *
     * @return bool|null
     */
    public function isAutomaticForward(): ?bool;

    /**
     * Необязательный. Для ответов в том же чате и ветке сообщений — исходное сообщение. Обратите внимание,
     * что объект Message в этом поле не будет содержать дополнительных полей Answer_to_message, даже если
     * он сам является ответом.
     *
     * @return MessageInterface|null
     */
    public function getReplyToMessage(): ?MessageInterface;

    /**
     * Необязательный. Информация о сообщении, на которое отвечают, которая может исходить из другого чата
     * или темы форума.
     *
     * @return ExternalReplyInfoInterface|null
     */
    public function getExternalReply(): ?ExternalReplyInfoInterface;

    /**
     * Необязательный. Для ответов, в которых цитируется часть исходного сообщения, используется цитируемая
     * часть сообщения.
     *
     * @return TextQuoteInterface|null
     */
    public function getQuote(): ?TextQuoteInterface;

    /**
     * Необязательный. Бот, через которого было отправлено сообщение.
     *
     * @return UserInterface|null
     */
    public function getViaBot(): ?UserInterface;

    /**
     * Необязательный. Дата последнего редактирования сообщения по времени Unix.
     *
     * @return int|float|null
     */
    public function getEditDate(): int|float|null;

    /**
     * Необязательный. Правда, если сообщение невозможно переслать.
     *
     * @return bool|null
     */
    public function hasProtectedContent(): ?bool;

    /**
     * Необязательный. Уникальный идентификатор группы мультимедийных сообщений, к которой принадлежит это
     * сообщение.
     *
     * @return string|null
     */
    public function getMediaGroupId(): ?string;

    /**
     * Необязательный. Подпись автора поста для сообщений в каналах или произвольный титул администратора а
     * нонимной группы.
     *
     * @return string|null
     */
    public function getAuthorSignature(): ?string;

    /**
     * Необязательный. Для текстовых сообщений — фактический текст сообщения в формате UTF-8.
     *
     * @return string|null
     */
    public function getText(): ?string;

    /**
     * Необязательный. Для текстовых сообщений — специальные объекты, такие как имена пользователей, URL-ад
     * реса, команды бота и т.д., которые появляются в тексте.
     *
     * @return null|MessageEntityInterface[]
     */
    public function getEntities(): ?array;

    /**
     * Необязательный. Параметры, используемые для создания предварительного просмотра ссылки для сообщения,
     * если это текстовое сообщение, и параметры предварительного просмотра ссылки были изменены.
     *
     * @return LinkPreviewOptionsInterface|null
     */
    public function getLinkPreviewOptions(): ?LinkPreviewOptionsInterface;

    /**
     * Необязательный. Сообщение — анимация, информация об анимации. В целях обратной совместимости, если
     * это поле установлено, поле документа также будет установлено.
     *
     * @return AnimationInterface|null
     */
    public function getAnimation(): ?AnimationInterface;

    /**
     * Необязательный. Сообщение — аудиофайл, информация о файле.
     *
     * @return AudioInterface|null
     */
    public function getAudio(): ?AudioInterface;

    /**
     * Необязательный. Сообщение — общий файл, информация о файле.
     *
     * @return DocumentInterface|null
     */
    public function getDocument(): ?DocumentInterface;

    /**
     * Необязательный. Сообщение представляет собой фотографию, доступные размеры фотографии.
     *
     * @return PhotoSizeInterface[]|null
     */
    public function getPhoto(): ?array;

    /**
     * Необязательный. Сообщение — стикер, информация о стикере.
     *
     * @return StickerInterface|null
     */
    public function getSticker(): ?StickerInterface;

    /**
     * Необязательный. Сообщение – это пересылаемая история.
     *
     * @return StoryInterface|null
     */
    public function getStory(): ?StoryInterface;

    /**
     * Необязательный. Сообщение — видео, информация о видео.
     *
     * @return VideoInterface|null
     */
    public function getVideo(): ?VideoInterface;

    /**
     * Необязательный. Сообщение – видеозаметка, информация о видеообращении.
     *
     * @link https://telegram.org/blog/video-messages-and-telescope
     * @return VideoNoteInterface|null
     */
    public function getVideoNote(): ?VideoNoteInterface;

    /**
     * Необязательный. Сообщение — голосовое сообщение, информация о файле.
     *
     * @return VoiceInterface|null
     */
    public function getVoice(): ?VoiceInterface;

    /**
     * Необязательный. Подпись к анимации, аудио, документу, фотографии, видео или голосу.
     *
     * @return string|null
     */
    public function getCaption(): ?string;

    /**
     * Необязательный. Для сообщений с заголовком в заголовке появляются специальные объекты, такие как име
     * на пользователей, URL-адреса, команды бота и т.д.
     *
     * @return MessageEntityInterface[]|null
     */
    public function getCaptionEntities(): ?array;

    /**
     * Необязательный. Правда, если медиа-сообщение покрыто анимацией-спойлером.
     *
     * @return bool|null
     */
    public function hasMediaSpoiler(): ?bool;

    /**
     * Необязательный. Сообщение — общий контакт, информация о контакте.
     *
     * @return ContactInterface|null
     */
    public function getContact(): ?ContactInterface;

    /**
     * Необязательный. Сообщение представляет собой игральную кость со случайным значением.
     *
     * @return DiceInterface|null
     */
    public function getDice(): ?DiceInterface;

    /**
     * Необязательный. Сообщение – игра, информация об игре.
     *
     * @link https://core.telegram.org/bots/api#games
     * @return GameInterface|null
     */
    public function getGame(): ?GameInterface;

    /**
     * Необязательный. Сообщение — родной опрос, информация об опросе.
     *
     * @return PollInterface|null
     */
    public function getPoll(): ?PollInterface;

    /**
     * Необязательный. Сообщение – место проведения, информация о месте проведения. В целях обратной совмес
     * тимости, если это поле установлено, также будет установлено поле местоположения.
     *
     * @return VenueInterface|null
     */
    public function getVenue(): ?VenueInterface;

    /**
     * Необязательный. Сообщение — это общее местоположение, информация о местоположении.
     *
     * @return LocationInterface|null
     */
    public function getLocation(): ?LocationInterface;

    /**
     * Необязательный. Новые участники, которые были добавлены в группу или супергруппу и информация о них
     * (одним из этих участников может быть сам бот).
     *
     * @return UserInterface[]|null
     */
    public function getNewChatMembers(): ?array;

    /**
     * Необязательный. Участник удален из группы, информация о нем (этим участником может быть сам бот).
     *
     * @return UserInterface|null
     */
    public function getLeftChatMember(): ?UserInterface;

    /**
     * Необязательный. Название чата было изменено на это значение.
     *
     * @return string|null
     */
    public function getNewChatTitle(): ?string;

    /**
     * Необязательный. Фотография в чате была изменена на это значение.
     *
     * @return PhotoSizeInterface[]|null
     */
    public function getNewChatPhoto(): ?array;

    /**
     * Необязательный. Сервисное сообщение: фото в чате удалено.
     *
     * @return bool|null
     */
    public function isDeleteChatPhoto(): ?bool;

    /**
     * Необязательный. Сервисное сообщение: группа создана.
     *
     * @return bool|null
     */
    public function isGroupChatCreated(): ?bool;

    /**
     * Необязательный. Сервисное сообщение: супергруппа создана. Это поле невозможно получить в сообщении,
     * приходящем через обновления, поскольку бот не может быть членом супергруппы при ее создании. Его мож
     * но найти только в ответе_to_message, если кто-то отвечает на самое первое сообщение в непосредственн
     * о созданной супергруппе.
     *
     * @return bool|null
     */
    public function isSupergroupChatCreated(): ?bool;

    /**
     * Необязательный. Служебное сообщение: канал создан. Это поле невозможно получить в сообщении, поступа
     * ющем через обновления, поскольку бот не может быть участником канала на момент его создания. Его мож
     * но найти только в ответе_to_message, если кто-то отвечает на самое первое сообщение в канале.
     *
     * @return bool|null
     */
    public function isChannelChatCreated(): ?bool;

    /**
     * Необязательный. Сервисное сообщение: в чате изменены настройки таймера автоудаления.
     *
     * @return MessageAutoDeleteTimerChangedInterface|null
     */
    public function getMessageAutoDeleteTimerChanged(): ?MessageAutoDeleteTimerChangedInterface;

    /**
     * Необязательный. Группа перенесена в супергруппу с указанным идентификатором. Это число может иметь б
     * олее 32 значащих битов, и в некоторых языках программирования могут возникнуть трудности или неявные
     * дефекты при его интерпретации. Но он имеет не более 52 значащих битов, поэтому 64-битное целое числ
     * о со знаком или тип с плавающей запятой двойной точности безопасны для хранения этого идентификатора.
     *
     * @return int|float|null
     */
    public function getMigrateToChatId(): null|int|float;

    /**
     * Необязательный. Супергруппа была перенесена из группы с указанным идентификатором. Это число может и
     * меть более 32 значащих битов, и в некоторых языках программирования могут возникнуть трудности или н
     * еявные дефекты при его интерпретации. Но он имеет не более 52 значащих битов, поэтому 64-битное цело
     * е число со знаком или тип с плавающей запятой двойной точности безопасны для хранения этого идентифи
     * катора.
     *
     * @return int|float|null
     */
    public function getMigrateFromChatId(): null|int|float;

    /**
     * Необязательный. Указанное сообщение было закреплено. Обратите внимание, что объект Message в этом по
     * ле не будет содержать дополнительных полей reply_to_message, даже если он сам является ответом.
     *
     * @return MaybeInaccessibleMessageInterface|null
     */
    public function getPinnedMessage(): ?MaybeInaccessibleMessageInterface;

    /**
     * Необязательный. Сообщение — счет на оплату, информация о счете.
     *
     * @link https://core.telegram.org/bots/api#payments
     * @return InvoiceInterface|null
     */
    public function getInvoice(): ?InvoiceInterface;

    /**
     * Необязательный. Сообщение – служебное сообщение об успешном платеже, информация о платеже.
     *
     * @link https://core.telegram.org/bots/api#payments
     * @return SuccessfulPaymentInterface|null
     */
    public function getSuccessfulPayment(): ?SuccessfulPaymentInterface;

    /**
     * Необязательный. Сервисное сообщение: пользователи поделились с ботом.
     *
     * @return UsersSharedInterface|null
     */
    public function getUsersShared(): ?UsersSharedInterface;

    /**
     * Необязательный. Сервисное сообщение: с ботом поделился чатом.
     *
     * @return ChatSharedInterface|null
     */
    public function getChatShared(): ?ChatSharedInterface;

    /**
     * Необязательный. Доменное имя веб-сайта, на котором авторизовался пользователь.
     *
     * @link https://core.telegram.org/widgets/login
     * @return string|null
     */
    public function getConnectedWebsite(): ?string;

    /**
     * Необязательный. Служебное сообщение: пользователь разрешил боту писать сообщения после добавления ег
     * о во вложение или боковое меню, запуска веб-приложения по ссылке или принятия явного запроса от веб-
     * приложения, отправленного методом requestWriteAccess.
     *
     * @link https://core.telegram.org/bots/webapps#initializing-mini-apps
     * @return WriteAccessAllowedInterface|null
     */
    public function getWriteAccessAllowed(): ?WriteAccessAllowedInterface;

    /**
     * Необязательный. Паспортные данные Telegram.
     *
     * @return PassportDataInterface|null
     */
    public function getPassportData(): ?PassportDataInterface;

    /**
     * Необязательный. Сервисное сообщение. Пользователь в чате активировал оповещение о близости другого п
     * ользователя, когда делился местоположением в реальном времени.
     *
     * @return ProximityAlertTriggeredInterface|null
     */
    public function getProximityAlertTriggered(): ?ProximityAlertTriggeredInterface;

    /**
     * Необязательный. Сервисное сообщение: тема на форуме создана.
     *
     * @return ForumTopicCreatedInterface|null
     */
    public function getForumTopicCreated(): ?ForumTopicCreatedInterface;

    /**
     * Необязательный. Сервисное сообщение: тема форума отредактирована.
     *
     * @return ForumTopicEditedInterface|null
     */
    public function getForumTopicEdited(): ?ForumTopicEditedInterface;

    /**
     * Необязательный. Сервисное сообщение: тема форума закрыта.
     *
     * @return ForumTopicClosedInterface|null
     */
    public function getForumTopicClosed(): ?ForumTopicClosedInterface;

    /**
     * Необязательный. Сервисное сообщение: тема форума открыта заново.
     *
     * @return ForumTopicReopenedInterface|null
     */
    public function getForumTopicReopened(): ?ForumTopicReopenedInterface;

    /**
     * Необязательный. Служебное сообщение: тема форума «Общие» скрыта.
     *
     * @return GeneralForumTopicHiddenInterface|null
     */
    public function getGeneralForumTopicHidden(): ?GeneralForumTopicHiddenInterface;

    /**
     * Необязательный. Служебное сообщение: отображается тема форума «Общие».
     *
     * @return GeneralForumTopicUnhiddenInterface|null
     */
    public function getGeneralForumTopicUnhidden(): ?GeneralForumTopicUnhiddenInterface;

    /**
     * Необязательный. Сервисное сообщение: создана запланированная раздача.
     *
     * @return GiveawayCreatedInterface|null
     */
    public function getGiveawayCreated(): ?GiveawayCreatedInterface;

    /**
     * Необязательный. Это запланированное сообщение о раздаче подарков.
     *
     * @return GiveawayInterface|null
     */
    public function getGiveaway(): ?GiveawayInterface;

    /**
     * Необязательный. Розыгрыш с участием публичных победителей завершен.
     *
     * @return GiveawayWinnersInterface|null
     */
    public function getGiveawayWinners(): ?GiveawayWinnersInterface;

    /**
     * Необязательный. Сервисное сообщение: розыгрыш без публичных победителей завершен.
     *
     * @return GiveawayCompletedInterface|null
     */
    public function getGiveawayCompleted(): ?GiveawayCompletedInterface;

    /**
     * Необязательный. Служебное сообщение: запланирован видеочат.
     *
     * @return VideoChatScheduledInterface|null
     */
    public function getVideoChatScheduled(): ?VideoChatScheduledInterface;

    /**
     * Необязательный. Служебное сообщение: видеочат запущен.
     *
     * @return VideoChatStartedInterface|null
     */
    public function getVideoChatStarted(): ?VideoChatStartedInterface;

    /**
     * Необязательный. Служебное сообщение: видеочат завершен.
     *
     * @return VideoChatEndedInterface|null
     */
    public function getVideoChatEnded(): ?VideoChatEndedInterface;

    /**
     * Необязательный. Служебное сообщение: новые участники приглашены в видеочат.
     *
     * @return VideoChatParticipantsInvitedInterface|null
     */
    public function getVideoChatParticipantsInvited(): ?VideoChatParticipantsInvitedInterface;

    /**
     * Необязательный. Служебное сообщение: данные, отправленные веб-приложением.
     *
     * @return WebAppDataInterface|null
     */
    public function getWebAppData(): ?WebAppDataInterface;

    /**
     * Необязательный. Встроенная клавиатура, прикрепленная к сообщению. Кнопки login_url представлены как
     * обычные кнопки URL.
     *
     * @return InlineKeyboardMarkupInterface|null
     */
    public function getInlineKeyboardMarkup(): ?InlineKeyboardMarkupInterface;
}
