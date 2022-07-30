<?php

namespace Xucar\XucarSdk\Model;

use JMS\Serializer\Annotation\Type;
use Symfony\Component\Serializer\Annotation\SerializedName;

class ProductAndPrice extends ProductBase
{
    /**
     * @var float
     * @Type("float")
     * @SerializedName("price")
     */
    private float $price;

    public function __construct(string $sku, float $price)
    {
        parent::__construct($sku);

        $this->price = $price;
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