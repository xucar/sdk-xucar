<?php

namespace Xucar\XucarSdk;

use Xucar\XucarSdk\Model\InterfaceRequest;
use Xucar\XucarSdk\Model\InterfaceResponse;

interface ApiInterface
{
    public function __construct(string $host, string $token);

    /**
     * @param InterfaceRequest $request
     *
     * @return array<InterfaceResponse>
     */
    public function getAll(InterfaceRequest $request): array;

    public function get(InterfaceRequest $request): InterfaceResponse;

    public function put(InterfaceRequest $request): InterfaceResponse;

    public function postAll(InterfaceRequest $request): InterfaceResponse;

    public function post(InterfaceRequest $request): InterfaceResponse;
}