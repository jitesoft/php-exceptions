<?php

namespace Jitesoft\Exceptions\Tests\Http\Server;

use Jitesoft\Exceptions\Http\Server\HttpBadGatewayException;
use Jitesoft\Exceptions\Tests\Http\HttpExceptionTest;

class HttpBadGatewayExceptionTest  extends HttpExceptionTest {

    protected $expectedErrorCode = 502;

    protected function throwDefaultException(): void {
        throw new HttpBadGatewayException();
    }

    public function throwMessageException(string $message): void {
        throw new HttpBadGatewayException($message);
    }
}
