<?php

namespace Xucar\XucarSdk\Model;

class Order
{
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
        private string $uuid,
        private string $reference,
        private bool $isPrime,
        private string $clientName,
        private string $clientPhone,
        private string $clientAddress,
        private string $clientPostalCode,
        private string $clientState,
        private string $clientCountry,
        private float $total,
        private float $productsPrice,
        private float $shippingPrice,
        private array $orderProductsModel
    ) {

    }

    public function getUuid(): string
    {
        return $this->uuid;
    }

    public function getReference(): string
    {
        return $this->reference;
    }

    public function getIsPrime(): bool
    {
        return $this->isPrime;
    }

    public function getClientName(): string
    {
        return $this->clientName;
    }

    public function getClientPhone(): string
    {
        return $this->clientPhone;
    }

    public function getClientAddress(): string
    {
        return $this->clientAddress;
    }

    public function getClientPostalCode(): string
    {
        return $this->clientPostalCode;
    }

    public function getClientState(): string
    {
        return $this->clientState;
    }

    public function getClientCountry(): string
    {
        return $this->clientCountry;
    }

    public function getTotal(): float
    {
        return $this->total;
    }

    public function getProductsPrice(): float
    {
        return $this->productsPrice;
    }

    public function getShippingPrice(): float
    {
        return $this->shippingPrice;
    }

    /**
     * @return Products[]
     */
    public function getOrderProductsModel(): array
    {
        return $this->orderProductsModel;
    }
}