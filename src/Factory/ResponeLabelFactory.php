<?php

namespace Xucar\XucarSdk\Factory;

use Xucar\XucarSdk\Model\RequestLabel;
use Xucar\XucarSdk\Model\ResponseLabel;
use Xucar\XucarSdk\Serializer;

class ResponeLabelFactory
{
    /**
     * @param string $body
     *
     * @return ResponseLabel
     */
    public static function build(string $body): ResponseLabel
    {
        return Serializer::deserialize($body, ResponseLabel::class);
    }

    /**
     * @param ResponseLabel $products
     *
     * @return string
     */
    public static function toJson(ResponseLabel $products): string
    {
        return Serializer::serialize($products);
    }
}