<?php

namespace Xucar\XucarSdk\Factory;

use Xucar\XucarSdk\Model\RequestProduct;
use Xucar\XucarSdk\Serializer;

class RequestProductFactory
{
    /**
     * @param string $body
     *
     * @return RequestProduct[]
     */
    public static function build(string $body): array
    {
        return Serializer::deserialize($body, 'array<'.RequestProduct::class.'>');
    }

    /**
     * @param RequestProduct[] $products
     *
     * @return string
     */
    public static function toJson(array $products): string
    {
        return Serializer::serialize($products);
    }
}