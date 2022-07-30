<?php

namespace Xucar\XucarSdk\Model;

use JMS\Serializer\Annotation\Type;
use Symfony\Component\Serializer\Annotation\SerializedName;

class ProductAndStock extends ProductBase
{
    /**
     * @var integer
     * @Type("integer")
     * @SerializedName("quantity")
     */
    private int $quantity;

    public function __construct(string $sku, int $quantity)
    {
        parent::__construct($sku);

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
}