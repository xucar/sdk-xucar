<?php

namespace Xucar\XucarSdk\Model;

use JMS\Serializer\Annotation as Serializer;

final class RequestProduct extends AbstractRequest
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
    private float $price;

    /**
     * @Serializer\Type("float")
     * @Serializer\SerializedName("width")
     */
    private ?float $width;

    /**
     * @Serializer\Type("float")
     * @Serializer\SerializedName("length")
     */
    private ?float $length;

    /**
     * @Serializer\Type("float")
     * @Serializer\SerializedName("heigth")
     */
    private ?float $height;

    /**
     * @Serializer\Type("float")
     * @Serializer\SerializedName("weigth")
     */
    private ?float $weight;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("fulfillmentLatency")
     */
    private int $fulfillmentLatency;

    /**
     * @var RequestProductMarketplace[]
     * @Serializer\Type("array<Xucar\XucarSdk\Model\RequestProductMarketplace>")
     * @Serializer\SerializedName("stocks")
     */
    private array $marketplaces;

    /**
     * @param string $sku
     * @param int $stock
     * @param float $price
     * @param float|null $width
     * @param float|null $length
     * @param float|null $height
     * @param float|null $weight
     * @param RequestProductMarketplace[] $marketplaces
     * @param int $fulfillmentLatency
     */
    public function __construct(
        string $sku,
        int $stock,
        float $price,
        ?float $width = null,
        ?float $length = null,
        ?float $height = null,
        ?float $weight = null,
        array $marketplaces = [],
        int $fulfillmentLatency = 3
    ) {
        $this->sku = $sku;
        $this->stock = $stock;
        $this->price = $price;
        $this->width = $width;
        $this->length = $length;
        $this->height = $height;
        $this->weight = $weight;
        $this->marketplaces = $marketplaces;
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

    public function getWidth(): ?float
    {
        return $this->width;
    }

    public function getLength(): ?float
    {
        return $this->length;
    }

    public function getHeight(): ?float
    {
        return $this->height;
    }

    public function getWeight(): ?float
    {
        return $this->weight;
    }

    /**
     * @return RequestProductMarketplace[]
     */
    public function getMarketplaces(): array
    {
        return $this->marketplaces;
    }

    public function getFulfillmentLatency(): int
    {
        return $this->fulfillmentLatency;
    }
}