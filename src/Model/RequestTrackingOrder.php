<?php

namespace Xucar\XucarSdk\Model;

use JMS\Serializer\Annotation as Serializer;

final class RequestTrackingOrder
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("orderId")
     */
    private string $orderId;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("tracking_agency")
     */
    private string $trackingAgency;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("tracking_service")
     */
    private string $trackingService;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("tracking_number")
     */
    private string $trackingNumber;

    public function __construct(
        string $orderId,
        string $trackingAgency,
        string $trackingService,
        string $trackingNumber
    ) {
        $this->orderId = $orderId;
        $this->trackingAgency = $trackingAgency;
        $this->trackingService = $trackingService;
        $this->trackingNumber = $trackingNumber;
    }

    public function getOrderId(): string
    {
        return $this->orderId;
    }

    public function getTrackingAgency(): string
    {
        return $this->trackingAgency;
    }

    public function getTrackingService(): string
    {
        return $this->trackingService;
    }

    public function getTrackingNumber(): string
    {
        return $this->trackingNumber;
    }
}