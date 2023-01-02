<?php

namespace Xucar\XucarSdk;

use Xucar\XucarSdk\Exceptions\XucarApiException;
use Xucar\XucarSdk\Model\InterfaceRequest;
use Xucar\XucarSdk\Model\InterfaceResponse;

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
     * @return InterfaceResponse
     * @throws XucarApiException
     */
    public function get(InterfaceRequest $request): InterfaceResponse
    {
        throw new XucarApiException();
    }

    /**
     * @param InterfaceRequest $request
     *
     * @return InterfaceResponse
     * @throws XucarApiException
     */
    public function put(InterfaceRequest $request): InterfaceResponse
    {
        throw new XucarApiException();
    }

    /**
     * @param InterfaceRequest $request
     *
     * @return InterfaceResponse
     * @throws XucarApiException
     */
    public function postAll(InterfaceRequest $request): InterfaceResponse
    {
        throw new XucarApiException();
    }

    /**
     * @param InterfaceRequest $request
     *
     * @return InterfaceResponse
     * @throws XucarApiException
     */
    public function post(InterfaceRequest $request): InterfaceResponse
    {
        throw new XucarApiException();
    }
}