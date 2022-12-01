<?php

namespace Xucar\XucarSdk\Model;

use JMS\Serializer\Annotation as Serializer;

class ResponseLabel extends AbstractResponse
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("base64")
     */
    private string $base64;

    public function __construct(string $requestId, string $base64)
    {
        parent::__construct($requestId);

        $this->base64 = $base64;
    }

    public function getBase64(): string
    {
        return $this->base64;
    }
}