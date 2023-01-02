<?php

namespace Xucar\XucarSdk;

use GuzzleHttp\Exception\GuzzleException;
use Xucar\XucarSdk\Exceptions\XucarApiClassNoEqualsException;
use Xucar\XucarSdk\Model\InterfaceResponse;
use Xucar\XucarSdk\Model\InterfaceRequest;
use Xucar\XucarSdk\Model\RequestTracking;
use Xucar\XucarSdk\Model\Response;

final class ApiTracking extends AbstractApi
{
    private const URL_TRACKING_POST = '/tracking/';

    /**
     * @param RequestTracking $request
     *
     * @return Response
     * @throws GuzzleException
     * @throws XucarApiClassNoEqualsException
     */
    public function postAll(InterfaceRequest $request): InterfaceResponse
    {
        if(get_class($request) !== RequestTracking::class){
            throw new XucarApiClassNoEqualsException();
        }

        $body = $this->getRequestPost(self::URL_TRACKING_POST, Serializer::serialize($request));

        return Serializer::deserialize($body, Response::class);
    }
}