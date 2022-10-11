<?php
namespace Jitesoft\Exceptions\Tests\Http\Server;

use Jitesoft\Exceptions\Http\Server\HttpServiceUnavailableException;
use Jitesoft\Exceptions\Tests\Http\HttpExceptionTest;

/**
 * @group Exceptions
 * @group HttpExceptions
 * @group RuntimeExceptions
 * @group HttpServerExceptions
 */
class HttpServiceUnavailableExceptionTest extends HttpExceptionTest {

    protected $expectedErrorCode = 503;

    protected function throwDefaultException(): void {
        throw new HttpServiceUnavailableException();
    }

    public function throwMessageException(string $message): void {
        throw new HttpServiceUnavailableException($message);
    }

}
