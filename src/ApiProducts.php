<?php

namespace Xucar\XucarSdk;

use GuzzleHttp\Exception\GuzzleException;
use Xucar\XucarSdk\Model\InterfaceRequest;
use Xucar\XucarSdk\Model\RequestProduct;
use Xucar\XucarSdk\Model\Response;

final class ApiProducts extends AbstractApi
{
    private const URL_ORDERS_PUT_PRODUCTS = '/products/';

    /**
     * @param RequestProduct $request
     *
     * @return Response
     * @throws GuzzleException
     */
    public function put(InterfaceRequest $request): Response
    {
        $body = $this->getRequest(self::URL_ORDERS_PUT_PRODUCTS, Serializer::serialize($request));

        return Serializer::deserialize($body, Response::class);
    }
}