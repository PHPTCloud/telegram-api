<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\LocalFileArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\MultipartArraySerializerInterface;

class MultipartArraySerializer implements MultipartArraySerializerInterface
{
    public function serialize(array $parameters): array
    {
        $multipart = [];

        foreach ($parameters as $key => $value) {
            if ($value instanceof LocalFileArgumentInterface) {
                $multipart[] = $this->createLocalFileParameter($key, $value);
                continue;
            } elseif (is_array($value)) {
                $multipart[] = $this->createArrayParameter($key, $value);
                continue;
            }
            $multipart[] = $this->createParameter($key, $value);
        }

        return $multipart;
    }

    private function createArrayParameter(string $name, array $contents): array
    {
        return [
            'name' => $name,
            'contents' => json_encode($contents),
        ];
    }

    private function createParameter(string $name, string|int|float|bool|null $contents): array
    {
        return [
            'name' => $name,
            'contents' => $contents,
        ];
    }

    private function createLocalFileParameter(string $name, LocalFileArgumentInterface $contents): array
    {
        return [
            'name' => $name,
            'contents' => fopen($contents->getFilePath(), 'r'),
        ];
    }
}
