<?php

namespace Xucar\XucarSdk;

use Xucar\XucarSdk\Exceptions\XucarApiException;
use Xucar\XucarSdk\Model\InterfaceApiResponse;
use Xucar\XucarSdk\Model\InterfaceRequest;

abstract class AbstractApi extends Api implements ApiInterface
{
    /**
     * @param InterfaceRequest $request
     *
     * @return array
     * @throws XucarApiException
     */
    public function getAll(InterfaceRequest $request): array
    {
        throw new XucarApiException();
    }

    /**
     * @param InterfaceRequest $request
     *
     * @return InterfaceApiResponse
     * @throws XucarApiException
     */
    public function put(InterfaceRequest $request): InterfaceApiResponse
    {
        throw new XucarApiException();
    }
}