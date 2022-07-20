<?php

namespace Xucar\XucarSdk;

use GuzzleHttp\Exception\GuzzleException;
use Xucar\XucarSdk\Factory\OrderFactory;
use Xucar\XucarSdk\Model\Order;

class Orders
{
    private const URL_ORDERS_GET_ORDERS = '/orders/get/orders';

    public function __construct(private string $url, private string $token)
    {
    }

    private function getUrlOrders(): string
    {
        return $this->url.self::URL_ORDERS_GET_ORDERS;
    }

    /**
     * @param string $createdAfter
     * @param string $createdBefore
     * @param string $marketplace
     *
     * @return Order[]
     * @throws GuzzleException
     */
    public function getOrders(string $createdAfter, string $createdBefore, string $marketplace): array
    {
        $body = $this->getJSONByApi($createdBefore, $createdAfter, $marketplace);

        return OrderFactory::build($body);
    }

    /**
     * @param string $createdBefore
     * @param string $createdAfter
     * @param string $marketplace
     *
     * @return string
     * @throws GuzzleException
     */
    private function getJSONByApi(string $createdBefore, string $createdAfter, string $marketplace): string
    {
        $headers = Api::getHeaders($this->token);
        $options = [
            'created_before' => $createdBefore,
            'created_after' => $createdAfter,
            'marketplace' => $marketplace,
        ];

        return (new Api())->getRequest('POST', $this->getUrlOrders(), $headers, $options);
    }
}