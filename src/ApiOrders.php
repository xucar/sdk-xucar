<?php

namespace Xucar\XucarSdk;

use GuzzleHttp\Exception\GuzzleException;
use Xucar\XucarSdk\Model\InterfaceRequest;
use Xucar\XucarSdk\Model\RequestOrders;
use Xucar\XucarSdk\Model\ResponseOrder;

final class ApiOrders extends AbstractApi
{
    private const URL_ORDERS_GET_ORDERS = '/orders/';

    /**
     * @param RequestOrders $request
     *
     * @return ResponseOrder[]
     * @throws GuzzleException
     */
    public function getAll(InterfaceRequest $request): array
    {
        $body = $this->getRequest(self::URL_ORDERS_GET_ORDERS, Serializer::serialize($request));

        return Serializer::deserialize($body, 'array<'.ResponseOrder::class.'>');
    }
}