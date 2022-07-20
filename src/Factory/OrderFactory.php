<?php

namespace Xucar\XucarSdk\Factory;

use Xucar\XucarSdk\Model\Order;
use Xucar\XucarSdk\Serializer;

class OrderFactory
{
    private const JSON = 'json';

    /**
     * @param string $body
     *
     * @return Order[]
     */
    public static function build(string $body): array
    {
        return Serializer::deserialize(
            $body,
            Order::class.'[]',
            self::JSON
        );
    }
}