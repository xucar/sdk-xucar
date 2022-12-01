<?php

namespace Xucar\XucarSdk\Factory;

use Xucar\XucarSdk\Model\RequestCreateLabel;
use Xucar\XucarSdk\Model\ResponseCreateLabel;
use Xucar\XucarSdk\Serializer;

class ResponseCreateLabelFactory
{
    /**
     * @param string $body
     *
     * @return ResponseCreateLabel
     */
    public static function build(string $body): ResponseCreateLabel
    {
        return Serializer::deserialize($body, RequestCreateLabel::class);
    }

    /**
     * @param ResponseCreateLabel $products
     *
     * @return string
     */
    public static function toJson(ResponseCreateLabel $products): string
    {
        return Serializer::serialize($products);
    }
}