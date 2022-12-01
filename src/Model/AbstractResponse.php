<?php

namespace Xucar\XucarSdk\Model;

use JMS\Serializer\Annotation as Serializer;

abstract class AbstractResponse implements InterfaceApiResponse
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("requestId")
     */
    private string $requestId;

    public function __construct(string $requestId)
    {
        $this->requestId = $requestId;
    }

    public function getRequestId(): string
    {
        return $this->requestId;
    }
}