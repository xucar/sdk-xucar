<?php

namespace Xucar\XucarSdk\Model;

class Products
{
    public function __construct(
        private string $sku,
        private string $asin,
        private int $quantity,
        private float $price,
        private float $tax,
        private float $shippingPrice,
        private float $shippingTax
    ) {

    }

    public function getSku(): string
    {
        return $this->sku;
    }

    public function getAsin(): string
    {
        return $this->asin;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getTax(): float
    {
        return $this->tax;
    }

    public function getShippingPrice(): float
    {
        return $this->shippingPrice;
    }

    public function getShippingTax(): float
    {
        return $this->shippingTax;
    }
}