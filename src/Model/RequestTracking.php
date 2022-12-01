<?php

namespace Xucar\XucarSdk\Model;

use JMS\Serializer\Annotation as Serializer;

class RequestTracking extends AbstractRequest
{
    /**
     * @Serializer\Type("array<Xucar\XucarSdk\Model\RequestTrankingOrder>")
     * @Serializer\SerializedName("orders")
     * @var RequestTrackingOrder[]
     */
    private array $orders;

    /**
     * @param RequestTrackingOrder[] $orders
     */
    public function __construct(array $orders)
    {
        $this->orders = $orders;
    }

    /**
     * @return RequestTrackingOrder[]
     */
    public function getOrders(): array
    {
        return $this->orders;
    }
}