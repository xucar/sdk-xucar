<?php

namespace Xucar\XucarSdk;

use GuzzleHttp\Exception\GuzzleException;
use Xucar\XucarSdk\Exceptions\XucarApiClassNoEqualsException;
use Xucar\XucarSdk\Model\InterfaceRequest;
use Xucar\XucarSdk\Model\InterfaceResponse;
use Xucar\XucarSdk\Model\RequestCreateLabel;
use Xucar\XucarSdk\Model\RequestLabel;
use Xucar\XucarSdk\Model\Response;
use Xucar\XucarSdk\Model\ResponseLabel;

final class ApiShipping extends AbstractApi
{
    private const URL_ORDERS_POST_LABEL = '/shipping/label/';

    /**
     * @param RequestCreateLabel $request
     *
     * @return Response
     * @throws GuzzleException
     * @throws XucarApiClassNoEqualsException
     */
    public function post(InterfaceRequest $request): InterfaceResponse
    {
        if (get_class($request) !== RequestCreateLabel::class) {
            throw new XucarApiClassNoEqualsException();
        }

        $body = $this->getRequestPost(self::URL_ORDERS_POST_LABEL, Serializer::serialize($request));

        return Serializer::deserialize($body, Response::class);
    }

    /**
     * @param RequestLabel $request
     *
     * @return ResponseLabel
     * @throws XucarApiClassNoEqualsException
     * @throws GuzzleException
     */
    public function get(InterfaceRequest $request): InterfaceResponse
    {
        if (get_class($request) !== RequestLabel::class) {
            throw new XucarApiClassNoEqualsException();
        }

        $body = $this->getRequestGet(
            self::URL_ORDERS_POST_LABEL.$request->getRequestId(),
            Serializer::serialize($request)
        );

        return Serializer::deserialize($body, ResponseLabel::class);
    }
}