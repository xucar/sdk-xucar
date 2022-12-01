<?php

namespace Xucar\XucarSdk\Factory;

use Xucar\XucarSdk\Model\RequestLabel;
use Xucar\XucarSdk\Serializer;

class RequestLabelFactory
{
    /**
     * @param string $body
     *
     * @return RequestLabel
     */
    public static function build(string $body): RequestLabel
    {
        return Serializer::deserialize($body, RequestLabel::class);
    }

    /**
     * @param RequestLabel $products
     *
     * @return string
     */
    public static function toJson(RequestLabel $products): string
    {
        return Serializer::serialize($products);
    }
}