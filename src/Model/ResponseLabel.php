<?php

namespace Xucar\XucarSdk\Model;

use JMS\Serializer\Annotation as Serializer;

final class ResponseLabel extends AbstractResponse
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("base64")
     */
    private string $base64;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("checksum")
     */
    private string $checksum;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("tracking_id")
     */
    private string $trackingId;

    /**
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("has_error")
     */
    private bool $hasError;

    public function __construct(string $requestId, string $base64, string $checksum, string $trackingId, bool $hasError)
    {
        parent::__construct($requestId);

        $this->base64 = $base64;
        $this->checksum = $checksum;
        $this->trackingId = $trackingId;
        $this->hasError = $hasError;
    }

    public function getBase64(): string
    {
        return $this->base64;
    }

    public function getChecksum(): string
    {
        return $this->checksum;
    }

    public function getTrackingId(): string
    {
        return $this->trackingId;
    }

    public function getHasError(): bool
    {
        return $this->hasError;
    }
}