<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SendVenueArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface SendVenueArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(SendVenueArgumentInterface $argument): array;
}
