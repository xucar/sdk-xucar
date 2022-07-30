<?php

namespace Xucar\XucarSdk\Model;

use JMS\Serializer\Annotation\Type;
use Symfony\Component\Serializer\Annotation\SerializedName;

class ProductBase
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("sku")
     */
    private string $sku;

    public function __construct(string $sku)
    {
        $this->sku = $sku;
    }

    public function getSku(): string
    {
        return $this->sku;
    }

    public function setSku(string $sku): void
    {
        $this->sku = $sku;
    }
}