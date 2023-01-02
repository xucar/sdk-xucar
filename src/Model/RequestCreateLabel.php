<?php

namespace Xucar\XucarSdk\Model;

use JMS\Serializer\Annotation as Serializer;

final class RequestCreateLabel extends AbstractRequest
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("orderId")
     */
    private string $orderId;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("itemOrderId")
     */
    private ?string $itemOrderId = null;

    public function __construct(string $orderId, ?string $itemOrderId)
    {
        $this->orderId = $orderId;
        $this->itemOrderId = $itemOrderId;
    }

    public function getOrderId(): string
    {
        return $this->orderId;
    }

    public function getItemOrderId(): ?string
    {
        return $this->itemOrderId;
    }
}