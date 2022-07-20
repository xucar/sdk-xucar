<?php

namespace Xucar\XucarSdk\Model;

use Symfony\Component\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Order
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("uuid")
     */
    private string $uuid;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("reference")
     */
    private string $reference;

    /**
     * @var bool
     * @Type("string")
     * @SerializedName("isPrime")
     */
    private bool $isPrime;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("clientName")
     */
    private string $clientName;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("clientPhone")
     */
    private string $clientPhone;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("clientAddress")
     */
    private string $clientAddress;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("clientPostalCode")
     */
    private string $clientPostalCode;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("clientState")
     */
    private string $clientState;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("clientCountry")
     */
    private string $clientCountry;

    /**
     * @var float
     * @Type("float")
     * @SerializedName("total")
     */
    private float $total;

    /**
     * @var float
     * @Type("float")
     * @SerializedName("productsPrice")
     */
    private float $productsPrice;

    /**
     * @var float
     * @Type("float")
     * @SerializedName("shippingPrice")
     */
    private float $shippingPrice;

    /**
     * @var Products[]
     * @Type("array<Xucar\XucarSdk\Model\Products>")
     * @SerializedName("orderProductsModel")
     */
    private array $orderProductsModel;

    /**
     * @param string $uuid
     * @param string $reference
     * @param bool $isPrime
     * @param string $clientName
     * @param string $clientPhone
     * @param string $clientAddress
     * @param string $clientPostalCode
     * @param string $clientState
     * @param string $clientCountry
     * @param float $total
     * @param float $productsPrice
     * @param float $shippingPrice
     * @param Products[] $orderProductsModel
     */
    public function __construct(
        string $uuid,
        string $reference,
        bool $isPrime,
        string $clientName,
        string $clientPhone,
        string $clientAddress,
        string $clientPostalCode,
        string $clientState,
        string $clientCountry,
        float $total,
        float $productsPrice,
        float $shippingPrice,
        array $orderProductsModel
    ) {
        $this->uuid = $uuid;
        $this->reference = $reference;
        $this->isPrime = $isPrime;
        $this->clientName = $clientName;
        $this->clientPhone = $clientPhone;
        $this->clientAddress = $clientAddress;
        $this->clientPostalCode = $clientPostalCode;
        $this->clientState = $clientState;
        $this->clientCountry = $clientCountry;
        $this->total = $total;
        $this->productsPrice = $productsPrice;
        $this->shippingPrice = $shippingPrice;
        $this->orderProductsModel = $orderProductsModel;
    }

    /**
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }

    /**
     * @param string $uuid
     */
    public function setUuid(string $uuid): void
    {
        $this->uuid = $uuid;
    }

    /**
     * @return string
     */
    public function getReference(): string
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     */
    public function setReference(string $reference): void
    {
        $this->reference = $reference;
    }

    /**
     * @return bool
     */
    public function isPrime(): bool
    {
        return $this->isPrime;
    }

    /**
     * @param bool $isPrime
     */
    public function setIsPrime(bool $isPrime): void
    {
        $this->isPrime = $isPrime;
    }

    /**
     * @return string
     */
    public function getClientName(): string
    {
        return $this->clientName;
    }

    /**
     * @param string $clientName
     */
    public function setClientName(string $clientName): void
    {
        $this->clientName = $clientName;
    }

    /**
     * @return string
     */
    public function getClientPhone(): string
    {
        return $this->clientPhone;
    }

    /**
     * @param string $clientPhone
     */
    public function setClientPhone(string $clientPhone): void
    {
        $this->clientPhone = $clientPhone;
    }

    /**
     * @return string
     */
    public function getClientAddress(): string
    {
        return $this->clientAddress;
    }

    /**
     * @param string $clientAddress
     */
    public function setClientAddress(string $clientAddress): void
    {
        $this->clientAddress = $clientAddress;
    }

    /**
     * @return string
     */
    public function getClientPostalCode(): string
    {
        return $this->clientPostalCode;
    }

    /**
     * @param string $clientPostalCode
     */
    public function setClientPostalCode(string $clientPostalCode): void
    {
        $this->clientPostalCode = $clientPostalCode;
    }

    /**
     * @return string
     */
    public function getClientState(): string
    {
        return $this->clientState;
    }

    /**
     * @param string $clientState
     */
    public function setClientState(string $clientState): void
    {
        $this->clientState = $clientState;
    }

    /**
     * @return string
     */
    public function getClientCountry(): string
    {
        return $this->clientCountry;
    }

    /**
     * @param string $clientCountry
     */
    public function setClientCountry(string $clientCountry): void
    {
        $this->clientCountry = $clientCountry;
    }

    /**
     * @return float
     */
    public function getTotal(): float
    {
        return $this->total;
    }

    /**
     * @param float $total
     */
    public function setTotal(float $total): void
    {
        $this->total = $total;
    }

    /**
     * @return float
     */
    public function getProductsPrice(): float
    {
        return $this->productsPrice;
    }

    /**
     * @param float $productsPrice
     */
    public function setProductsPrice(float $productsPrice): void
    {
        $this->productsPrice = $productsPrice;
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
     * @return Products[]
     */
    public function getOrderProductsModel(): array
    {
        return $this->orderProductsModel;
    }

    /**
     * @param Products[] $orderProductsModel
     */
    public function setOrderProductsModel(array $orderProductsModel): void
    {
        $this->orderProductsModel = $orderProductsModel;
    }
}