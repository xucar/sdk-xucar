<?php

namespace Xucar\XucarSdk;

use GuzzleHttp\Exception\GuzzleException;
use Xucar\XucarSdk\Exceptions\XucarApiClassNoEqualsException;
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
     * @throws XucarApiClassNoEqualsException
     */
    public function getAll(InterfaceRequest $request): array
    {
        if (get_class($request) !== RequestOrders::class) {
            throw new XucarApiClassNoEqualsException();
        }

        $body = $this->getRequestGet(self::URL_ORDERS_GET_ORDERS, Serializer::serialize($request));

        return Serializer::deserialize($body, 'array<'.ResponseOrder::class.'>');
    }
}