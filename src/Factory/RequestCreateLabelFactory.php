<?php

namespace Xucar\XucarSdk\Factory;

use Xucar\XucarSdk\Model\RequestCreateLabel;
use Xucar\XucarSdk\Serializer;

class RequestCreateLabelFactory
{
    /**
     * @param string $body
     *
     * @return RequestCreateLabel
     */
    public static function build(string $body): RequestCreateLabel
    {
        return Serializer::deserialize($body, RequestCreateLabel::class);
    }

    /**
     * @param RequestCreateLabel $products
     *
     * @return string
     */
    public static function toJson(RequestCreateLabel $products): string
    {
        return Serializer::serialize($products);
    }
}