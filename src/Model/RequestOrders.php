<?php

namespace Xucar\XucarSdk\Model;

use JMS\Serializer\Annotation as Serializer;

class RequestOrders extends AbstractRequest
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("created_before")
     */
    private string $createBefore;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("created_after")
     */
    private string $createdAfter;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("marketplace")
     */
    private string $marketplace;

    public function __construct(string $createBefore, string $createdAfter, string $marketplace)
    {
        $this->createBefore = $createBefore;
        $this->createdAfter = $createdAfter;
        $this->marketplace = $marketplace;
    }

    public function getCreateBefore(): string
    {
        return $this->createBefore;
    }

    public function getCreatedAfter(): string
    {
        return $this->createdAfter;
    }

    public function getMarketplace(): string
    {
        return $this->marketplace;
    }
}