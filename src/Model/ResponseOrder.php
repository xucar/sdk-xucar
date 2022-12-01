<?php

namespace Xucar\XucarSdk\Model;

use JMS\Serializer\Annotation as Serializer;

class ResponseOrder extends AbstractResponse
{
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("uuid")
     */
    private string $uuid;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("reference")
     */
    private string $reference;

    /**
     * @var bool
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("prime")
     */
    private bool $isPrime;

    /**
     * @var bool
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("business")
     */
    private bool $isBusiness;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("clientName")
     */
    private string $clientName;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("clientPhone")
     */
    private string $clientPhone;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("clientAddress")
     */
    private string $clientAddress;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("clientPostalCode")
     */
    private string $clientPostalCode;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("clientState")
     */
    private string $clientState;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("clientCountry")
     */
    private string $clientCountry;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("clientCity")
     */
    private string $clientCity;

    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("total")
     */
    private float $total;

    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("productsPrice")
     */
    private float $productsPrice;

    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("shippingPrice")
     */
    private float $shippingPrice;

    /**
     * @var ResponseOrderProduct[]
     * @Serializer\Type("array<Xucar\XucarSdk\Model\ResponseOrderProduct>")
     * @Serializer\SerializedName("orderProductsModel")
     */
    private array $orderProductsModel;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("date")
     */
    private string $date;

    /**
     * @param string $uuid
     * @param string $reference
     * @param bool $isPrime
     * @param bool $isBusiness
     * @param string $clientName
     * @param string $clientPhone
     * @param string $clientAddress
     * @param string $clientPostalCode
     * @param string $clientState
     * @param string $clientCountry
     * @param string $clientCity
     * @param float $total
     * @param float $productsPrice
     * @param float $shippingPrice
     * @param ResponseOrderProduct[] $orderProductsModel
     * @param string $date
     */
    public function __construct(
        string $requestId,
        string $uuid,
        string $reference,
        bool $isPrime,
        bool $isBusiness,
        string $clientName,
        string $clientPhone,
        string $clientAddress,
        string $clientPostalCode,
        string $clientState,
        string $clientCountry,
        string $clientCity,
        float $total,
        float $productsPrice,
        float $shippingPrice,
        array $orderProductsModel,
        string $date
    ) {
        parent::__construct($requestId);

        $this->uuid = $uuid;
        $this->reference = $reference;
        $this->isPrime = $isPrime;
        $this->isBusiness = $isBusiness;
        $this->clientName = $clientName;
        $this->clientPhone = $clientPhone;
        $this->clientAddress = $clientAddress;
        $this->clientPostalCode = $clientPostalCode;
        $this->clientCity = $clientCity;
        $this->clientState = $clientState;
        $this->clientCountry = $clientCountry;
        $this->total = $total;
        $this->productsPrice = $productsPrice;
        $this->shippingPrice = $shippingPrice;
        $this->orderProductsModel = $orderProductsModel;
        $this->date = $date;
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
     * @return ResponseOrderProduct[]
     */
    public function getOrderProductsModel(): array
    {
        return $this->orderProductsModel;
    }

    /**
     * @param ResponseOrderProduct[] $orderProductsModel
     */
    public function setOrderProductsModel(array $orderProductsModel): void
    {
        $this->orderProductsModel = $orderProductsModel;
    }

    public function isBusiness(): bool
    {
        return $this->isBusiness;
    }

    public function setIsBusiness(bool $isBusiness): void
    {
        $this->isBusiness = $isBusiness;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function setDate(string $date): void
    {
        $this->date = $date;
    }

    public function getClientCity(): string
    {
        return $this->clientCity;
    }

    public function setClientCity(string $clientCity): void
    {
        $this->clientCity = $clientCity;
    }
}