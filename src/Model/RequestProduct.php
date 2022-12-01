<?php

namespace Xucar\XucarSdk\Model;

use JMS\Serializer\Annotation as Serializer;

class RequestProduct extends AbstractRequest
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("sku")
     */
    private string $sku;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("stock")
     */
    private int $stock;

    /**
     * @Serializer\Type("float")
     * @Serializer\SerializedName("price")
     */
    private int $price;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("width")
     */
    private ?int $width;

    /**
     * @Serializer\Type("stintegerring")
     * @Serializer\SerializedName("length")
     */
    private ?int $length;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("heigth")
     */
    private ?int $height;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("weigth")
     */
    private ?int $weight;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("fulfillmentLatency")
     */
    private int $fulfillmentLatency;

    /**
     * @param string $sku
     * @param int $stock
     * @param float $price
     * @param int|null $width
     * @param int|null $length
     * @param int|null $height
     * @param int|null $weight
     * @param int $fulfillmentLatency
     */
    public function __construct(
        string $sku,
        int $stock,
        float $price,
        ?int $width = null,
        ?int $length = null,
        ?int $height = null,
        ?int $weight = null,
        int $fulfillmentLatency = 3
    ) {
        $this->sku = $sku;
        $this->stock = $stock;
        $this->price = $price;
        $this->width = $width;
        $this->length = $length;
        $this->height = $height;
        $this->weight = $weight;
        $this->fulfillmentLatency = $fulfillmentLatency;
    }

    public function getSku(): string
    {
        return $this->sku;
    }

    public function getStock(): int
    {
        return $this->stock;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getWidth(): ?int
    {
        return $this->width;
    }

    public function getLength(): ?int
    {
        return $this->length;
    }

    public function getHeight(): ?int
    {
        return $this->height;
    }

    public function getWeight(): ?int
    {
        return $this->weight;
    }

    public function getFulfillmentLatency(): int
    {
        return $this->fulfillmentLatency;
    }
}