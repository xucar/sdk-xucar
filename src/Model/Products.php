<?php

namespace Xucar\XucarSdk\Model;

use JMS\Serializer\Annotation\Type;
use Symfony\Component\Serializer\Annotation\SerializedName;

class Products extends ProductBase
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("asin")
     */
    private string $asin;

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

    /**
     * @var float
     * @Type("float")
     * @SerializedName("tax")
     */
    private float $tax;

    /**
     * @var float
     * @Type("float")
     * @SerializedName("shippingPrice")
     */
    private float $shippingPrice;

    /**
     * @var float
     * @Type("float")
     * @SerializedName("shippingTax")
     */
    private float $shippingTax;

    public function __construct(
        string $sku,
        string $asin,
        int $quantity,
        float $price,
        float $tax,
        float $shippingPrice,
        float $shippingTax
    ) {
        parent::__construct($sku);

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
}