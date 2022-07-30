<?php

namespace Xucar\XucarSdk\Model;

use JMS\Serializer\Annotation\Type;
use Symfony\Component\Serializer\Annotation\SerializedName;

class Product extends ProductBase
{
    /**
     * @var integer
     * @Type("integer")
     * @SerializedName("quantity")
     */
    private int $quantity;

    /**
     * @var float
     * @Type("float")
     * @SerializedName("price")
     */
    private float $price;

    public function __construct(string $sku, int $quantity, float $price)
    {
        parent::__construct($sku);

        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }
}