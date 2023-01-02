<?php

namespace Xucar\XucarSdk\Model;

use JMS\Serializer\Annotation as Serializer;

final class RequestProductMarketplace
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("quantity")
     */
    private ?int $quantity = null;

    /**
     * @Serializer\Type("float")
     * @Serializer\SerializedName("price")
     */
    private ?float $price = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("marketplace")
     */
    private string $marketplace;

    /**
     * @param int|null $quantity
     * @param float|null $price
     * @param string $marketplace
     */
    public function __construct(?int $quantity, ?float $price, string $marketplace)
    {
        $this->quantity = $quantity;
        $this->marketplace = $marketplace;
        $this->price = $price;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function getMarketplace(): string
    {
        return $this->marketplace;
    }
}