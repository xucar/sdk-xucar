<?php

namespace Xucar\XucarSdk\Factory;

use Xucar\XucarSdk\Model\ResponseOrder;
use Xucar\XucarSdk\Serializer;

class ResponseOrderFactory
{
    /**
     * @param string $body
     *
     * @return ResponseOrder[]
     */
    public static function build(string $body): array
    {
        return Serializer::deserialize($body, 'array<'.ResponseOrder::class.'>');
    }

    /**
     * @param ResponseOrder[] $orders
     *
     * @return string
     */
    public static function toJson(array $orders): string
    {
        return Serializer::serialize($orders);
    }
}