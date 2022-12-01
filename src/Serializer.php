<?php

namespace Xucar\XucarSdk;

use JMS\Serializer\SerializerBuilder;

final class Serializer
{
    public const JSON = 'json';
    public const XML = 'xml';

    public static function get(): \JMS\Serializer\Serializer
    {
        return SerializerBuilder::create()->build();
    }

    public static function deserialize(string $data, string $type): mixed
    {
        return self::get()->deserialize($data, $type, self::JSON);
    }

    public static function serialize(mixed $data): string
    {
        return self::get()->serialize($data, self::JSON);
    }
}