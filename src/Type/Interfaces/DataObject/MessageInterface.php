<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * Этот объект представляет сообщение.
 *
 * @see    https://core.telegram.org/bots/api#message
 */
interface MessageInterface
{
    /**
     * Уникальный идентификатор сообщения внутри этого чата.
     */
    public function getMessageId(): int|float;

    /**
     * Необязательный. Уникальный идентификатор потока сообщений, к которому принадлежит сообщение; только
     * для супергрупп.
     */
    public function getMessageThreadId(): int|float|null;

    /**
     * Необязательный. Отправитель сообщения; пусто для сообщений, отправленных в каналы. Для обратной совм
     * естимости в неканальных чатах поле содержит фиктивного пользователя-отправителя, если сообщение было
     * отправлено от имени чата.
     */
    public function getFrom(): ?UserInterface;

    /**
     * Необязательный. Отправитель сообщения, отправленного от имени чата. Например, сам канал для публикац
     * ий канала, сама супергруппа для сообщений от администраторов анонимных групп, связанный канал для со
     * общений, автоматически пересылаемых в дискуссионную группу. Для обратной совместимости поле from сод
     * ержит поддельного пользователя-отправителя в неканальных чатах, если сообщение было отправлено от им
     * ени чата.
     */
    public function getSenderChat(): ?ChatInterface;

    /**
     * Дата отправки сообщения по времени Unix. Это всегда положительное число, обозначающее действительную
     * дату.
     */
    public function getDate(): int|float;

    /**
     * Чат, которому принадлежит сообщение.
     */
    public function getChat(): ChatInterface;

    /**
     * Необязательный. Информация об исходном сообщении для пересылаемых сообщений.
     */
    public function getForwardOrigin(): ?MessageOriginInterface;

    /**
     * Необязательный. Правда, если сообщение отправлено в тему форума.
     */
    public function isTopicMessage(): ?bool;

    /**
     * Необязательный. Верно, если сообщение представляет собой публикацию канала, которая была автоматичес
     * ки перенаправлена в подключенную группу обсуждений.
     */
    public function isAutomaticForward(): ?bool;

    /**
     * Необязательный. Для ответов в том же чате и ветке сообщений — исходное сообщение. Обратите внимание,
     * что объект Message в этом поле не будет содержать дополнительных полей Answer_to_message, даже если
     * он сам является ответом.
     */
    public function getReplyToMessage(): ?MessageInterface;

    /**
     * Необязательный. Информация о сообщении, на которое отвечают, которая может исходить из другого чата
     * или темы форума.
     */
    public function getExternalReply(): ?ExternalReplyInfoInterface;

    /**
     * Необязательный. Для ответов, в которых цитируется часть исходного сообщения, используется цитируемая
     * часть сообщения.
     */
    public function getQuote(): ?TextQuoteInterface;

    /**
     * Необязательный. Бот, через которого было отправлено сообщение.
     */
    public function getViaBot(): ?UserInterface;

    /**
     * Необязательный. Дата последнего редактирования сообщения по времени Unix.
     */
    public function getEditDate(): int|float|null;

    /**
     * Необязательный. Правда, если сообщение невозможно переслать.
     */
    public function hasProtectedContent(): ?bool;

    /**
     * Необязательный. Уникальный идентификатор группы мультимедийных сообщений, к которой принадлежит это
     * сообщение.
     */
    public function getMediaGroupId(): ?string;

    /**
     * Необязательный. Подпись автора поста для сообщений в каналах или произвольный титул администратора а
     * нонимной группы.
     */
    public function getAuthorSignature(): ?string;

    /**
     * Необязательный. Для текстовых сообщений — фактический текст сообщения в формате UTF-8.
     */
    public function getText(): ?string;

    /**
     * Необязательный. Для текстовых сообщений — специальные объекты, такие как имена пользователей, URL-ад
     * реса, команды бота и т.д., которые появляются в тексте.
     *
     * @return MessageEntityInterface[]|null
     */
    public function getEntities(): ?array;

    /**
     * Необязательный. Параметры, используемые для создания предварительного просмотра ссылки для сообщения,
     * если это текстовое сообщение, и параметры предварительного просмотра ссылки были изменены.
     */
    public function getLinkPreviewOptions(): ?LinkPreviewOptionsInterface;

    /**
     * Необязательный. Сообщение — анимация, информация об анимации. В целях обратной совместимости, если
     * это поле установлено, поле документа также будет установлено.
     */
    public function getAnimation(): ?AnimationInterface;

    /**
     * Необязательный. Сообщение — аудиофайл, информация о файле.
     */
    public function getAudio(): ?AudioInterface;

    /**
     * Необязательный. Сообщение — общий файл, информация о файле.
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
     */
    public function getSticker(): ?StickerInterface;

    /**
     * Необязательный. Сообщение – это пересылаемая история.
     */
    public function getStory(): ?StoryInterface;

    /**
     * Необязательный. Сообщение — видео, информация о видео.
     */
    public function getVideo(): ?VideoInterface;

    /**
     * Необязательный. Сообщение – видеозаметка, информация о видеообращении.
     *
     * @see https://telegram.org/blog/video-messages-and-telescope
     */
    public function getVideoNote(): ?VideoNoteInterface;

    /**
     * Необязательный. Сообщение — голосовое сообщение, информация о файле.
     */
    public function getVoice(): ?VoiceInterface;

    /**
     * Необязательный. Подпись к анимации, аудио, документу, фотографии, видео или голосу.
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
     */
    public function hasMediaSpoiler(): ?bool;

    /**
     * Необязательный. Сообщение — общий контакт, информация о контакте.
     */
    public function getContact(): ?ContactInterface;

    /**
     * Необязательный. Сообщение представляет собой игральную кость со случайным значением.
     */
    public function getDice(): ?DiceInterface;

    /**
     * Необязательный. Сообщение – игра, информация об игре.
     *
     * @see https://core.telegram.org/bots/api#games
     */
    public function getGame(): ?GameInterface;

    /**
     * Необязательный. Сообщение — родной опрос, информация об опросе.
     */
    public function getPoll(): ?PollInterface;

    /**
     * Необязательный. Сообщение – место проведения, информация о месте проведения. В целях обратной совмес
     * тимости, если это поле установлено, также будет установлено поле местоположения.
     */
    public function getVenue(): ?VenueInterface;

    /**
     * Необязательный. Сообщение — это общее местоположение, информация о местоположении.
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
     */
    public function getLeftChatMember(): ?UserInterface;

    /**
     * Необязательный. Название чата было изменено на это значение.
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
     */
    public function isDeleteChatPhoto(): ?bool;

    /**
     * Необязательный. Сервисное сообщение: группа создана.
     */
    public function isGroupChatCreated(): ?bool;

    /**
     * Необязательный. Сервисное сообщение: супергруппа создана. Это поле невозможно получить в сообщении,
     * приходящем через обновления, поскольку бот не может быть членом супергруппы при ее создании. Его мож
     * но найти только в ответе_to_message, если кто-то отвечает на самое первое сообщение в непосредственн
     * о созданной супергруппе.
     */
    public function isSupergroupChatCreated(): ?bool;

    /**
     * Необязательный. Служебное сообщение: канал создан. Это поле невозможно получить в сообщении, поступа
     * ющем через обновления, поскольку бот не может быть участником канала на момент его создания. Его мож
     * но найти только в ответе_to_message, если кто-то отвечает на самое первое сообщение в канале.
     */
    public function isChannelChatCreated(): ?bool;

    /**
     * Необязательный. Сервисное сообщение: в чате изменены настройки таймера автоудаления.
     */
    public function getMessageAutoDeleteTimerChanged(): ?MessageAutoDeleteTimerChangedInterface;

    /**
     * Необязательный. Группа перенесена в супергруппу с указанным идентификатором. Это число может иметь б
     * олее 32 значащих битов, и в некоторых языках программирования могут возникнуть трудности или неявные
     * дефекты при его интерпретации. Но он имеет не более 52 значащих битов, поэтому 64-битное целое числ
     * о со знаком или тип с плавающей запятой двойной точности безопасны для хранения этого идентификатора.
     */
    public function getMigrateToChatId(): null|int|float;

    /**
     * Необязательный. Супергруппа была перенесена из группы с указанным идентификатором. Это число может и
     * меть более 32 значащих битов, и в некоторых языках программирования могут возникнуть трудности или н
     * еявные дефекты при его интерпретации. Но он имеет не более 52 значащих битов, поэтому 64-битное цело
     * е число со знаком или тип с плавающей запятой двойной точности безопасны для хранения этого идентифи
     * катора.
     */
    public function getMigrateFromChatId(): null|int|float;

    /**
     * Необязательный. Указанное сообщение было закреплено. Обратите внимание, что объект Message в этом по
     * ле не будет содержать дополнительных полей reply_to_message, даже если он сам является ответом.
     */
    public function getPinnedMessage(): ?MaybeInaccessibleMessageInterface;

    /**
     * Необязательный. Сообщение — счет на оплату, информация о счете.
     *
     * @see https://core.telegram.org/bots/api#payments
     */
    public function getInvoice(): ?InvoiceInterface;

    /**
     * Необязательный. Сообщение – служебное сообщение об успешном платеже, информация о платеже.
     *
     * @see https://core.telegram.org/bots/api#payments
     */
    public function getSuccessfulPayment(): ?SuccessfulPaymentInterface;

    /**
     * Необязательный. Сервисное сообщение: пользователи поделились с ботом.
     */
    public function getUsersShared(): ?UsersSharedInterface;

    /**
     * Необязательный. Сервисное сообщение: с ботом поделился чатом.
     */
    public function getChatShared(): ?ChatSharedInterface;

    /**
     * Необязательный. Доменное имя веб-сайта, на котором авторизовался пользователь.
     *
     * @see https://core.telegram.org/widgets/login
     */
    public function getConnectedWebsite(): ?string;

    /**
     * Необязательный. Служебное сообщение: пользователь разрешил боту писать сообщения после добавления ег
     * о во вложение или боковое меню, запуска веб-приложения по ссылке или принятия явного запроса от веб-
     * приложения, отправленного методом requestWriteAccess.
     *
     * @see https://core.telegram.org/bots/webapps#initializing-mini-apps
     */
    public function getWriteAccessAllowed(): ?WriteAccessAllowedInterface;

    /**
     * Необязательный. Паспортные данные Telegram.
     */
    public function getPassportData(): ?PassportDataInterface;

    /**
     * Необязательный. Сервисное сообщение. Пользователь в чате активировал оповещение о близости другого п
     * ользователя, когда делился местоположением в реальном времени.
     */
    public function getProximityAlertTriggered(): ?ProximityAlertTriggeredInterface;

    /**
     * Необязательный. Сервисное сообщение: тема на форуме создана.
     */
    public function getForumTopicCreated(): ?ForumTopicCreatedInterface;

    /**
     * Необязательный. Сервисное сообщение: тема форума отредактирована.
     */
    public function getForumTopicEdited(): ?ForumTopicEditedInterface;

    /**
     * Необязательный. Сервисное сообщение: тема форума закрыта.
     */
    public function getForumTopicClosed(): ?ForumTopicClosedInterface;

    /**
     * Необязательный. Сервисное сообщение: тема форума открыта заново.
     */
    public function getForumTopicReopened(): ?ForumTopicReopenedInterface;

    /**
     * Необязательный. Служебное сообщение: тема форума «Общие» скрыта.
     */
    public function getGeneralForumTopicHidden(): ?GeneralForumTopicHiddenInterface;

    /**
     * Необязательный. Служебное сообщение: отображается тема форума «Общие».
     */
    public function getGeneralForumTopicUnhidden(): ?GeneralForumTopicUnhiddenInterface;

    /**
     * Необязательный. Сервисное сообщение: создана запланированная раздача.
     */
    public function getGiveawayCreated(): ?GiveawayCreatedInterface;

    /**
     * Необязательный. Это запланированное сообщение о раздаче подарков.
     */
    public function getGiveaway(): ?GiveawayInterface;

    /**
     * Необязательный. Розыгрыш с участием публичных победителей завершен.
     */
    public function getGiveawayWinners(): ?GiveawayWinnersInterface;

    /**
     * Необязательный. Сервисное сообщение: розыгрыш без публичных победителей завершен.
     */
    public function getGiveawayCompleted(): ?GiveawayCompletedInterface;

    /**
     * Необязательный. Служебное сообщение: запланирован видеочат.
     */
    public function getVideoChatScheduled(): ?VideoChatScheduledInterface;

    /**
     * Необязательный. Служебное сообщение: видеочат запущен.
     */
    public function getVideoChatStarted(): ?VideoChatStartedInterface;

    /**
     * Необязательный. Служебное сообщение: видеочат завершен.
     */
    public function getVideoChatEnded(): ?VideoChatEndedInterface;

    /**
     * Необязательный. Служебное сообщение: новые участники приглашены в видеочат.
     */
    public function getVideoChatParticipantsInvited(): ?VideoChatParticipantsInvitedInterface;

    /**
     * Необязательный. Служебное сообщение: данные, отправленные веб-приложением.
     */
    public function getWebAppData(): ?WebAppDataInterface;

    /**
     * Необязательный. Встроенная клавиатура, прикрепленная к сообщению. Кнопки login_url представлены как
     * обычные кнопки URL.
     */
    public function getInlineKeyboardMarkup(): ?InlineKeyboardMarkupInterface;
}
