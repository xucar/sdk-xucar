<?php

namespace Xucar\XucarSdk\Factory;

use Xucar\XucarSdk\Model\Product;
use Xucar\XucarSdk\Serializer;

class ProductFactory
{
    private const JSON = 'json';

    /**
     * @param string $body
     *
     * @return Product[]
     */
    public static function build(string $body): array
    {
        return Serializer::deserialize(
            $body,
            Product::class.'[]',
            self::JSON
        );
    }

    /**
     * @param Product[] $products
     *
     * @return string
     */
    public static function toJson(array $products): string
    {
        return Serializer::serialize(
            $products,
            self::JSON
        );
    }
}