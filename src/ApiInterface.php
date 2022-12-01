<?php

namespace Xucar\XucarSdk;

use Xucar\XucarSdk\Model\InterfaceApiResponse;
use Xucar\XucarSdk\Model\InterfaceRequest;

interface ApiInterface
{
    public function __construct(string $host, string $token);

    /**
     * @param InterfaceRequest $request
     *
     * @return array<InterfaceApiResponse>
     */
    public function getAll(InterfaceRequest $request): array;

    public function put(InterfaceRequest $request): InterfaceApiResponse;
}