<?php

namespace Xucar\XucarSdk\Model;

use JMS\Serializer\Annotation as Serializer;

final class RequestTracking extends AbstractRequest
{
    /**
     * @Serializer\Type("array<Xucar\XucarSdk\Model\RequestTrackingOrder>")
     * @Serializer\SerializedName("orders")
     * @var RequestTrackingOrder[]
     */
    private array $trackingOrders;

    /**
     * @param RequestTrackingOrder[] $orders
     */
    public function __construct(array $orders)
    {
        $this->trackingOrders = $orders;
    }

    /**
     * @return RequestTrackingOrder[]
     */
    public function getTrackingOrders(): array
    {
        return $this->trackingOrders;
    }
}