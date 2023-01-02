<?php

namespace Xucar\XucarSdk\Model;

use JMS\Serializer\Annotation as Serializer;

final class RequestProducts extends AbstractRequest
{
    /**
     * @var RequestProduct[]
     *
     * @Serializer\Type("array<Xucar\XucarSdk\Model\RequestProduct>")
     * @Serializer\SerializedName("products")
     */
    private array $products;

    /**
     * @param RequestProduct[] $products
     */
    public function __construct(array $products)
    {
        $this->products = $products;
    }

    /**
     * @return RequestProduct[]
     */
    public function getProducts(): array
    {
        return $this->products;
    }
}