<?php

namespace Xucar\XucarSdk\Model;

use JMS\Serializer\Annotation as Serializer;

class ResponseOrderProduct extends AbstractResponse
{
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("sku")
     */
    private string $sku;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("asin")
     */
    private string $asin;

    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("quantity")
     */
    private int $quantity;

    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("price")
     */
    private float $price;

    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("tax")
     */
    private float $tax;

    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("shippingPrice")
     */
    private float $shippingPrice;

    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("shippingTax")
     */
    private float $shippingTax;

    public function __construct(
        string $requestId,
        string $sku,
        string $asin,
        int $quantity,
        float $price,
        float $tax,
        float $shippingPrice,
        float $shippingTax
    ) {
        parent::__construct($requestId);

        $this->sku = $sku;
        $this->asin = $asin;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->tax = $tax;
        $this->shippingPrice = $shippingPrice;
        $this->shippingTax = $shippingTax;
    }

    /**
     * @return string
     */
    public function getAsin(): string
    {
        return $this->asin;
    }

    /**
     * @param string $asin
     */
    public function setAsin(string $asin): void
    {
        $this->asin = $asin;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return float
     */
    public function getTax(): float
    {
        return $this->tax;
    }

    /**
     * @param float $tax
     */
    public function setTax(float $tax): void
    {
        $this->tax = $tax;
    }

    /**
     * @return float
     */
    public function getShippingPrice(): float
    {
        return $this->shippingPrice;
    }

    /**
     * @param float $shippingPrice
     */
    public function setShippingPrice(float $shippingPrice): void
    {
        $this->shippingPrice = $shippingPrice;
    }

    /**
     * @return float
     */
    public function getShippingTax(): float
    {
        return $this->shippingTax;
    }

    /**
     * @param float $shippingTax
     */
    public function setShippingTax(float $shippingTax): void
    {
        $this->shippingTax = $shippingTax;
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