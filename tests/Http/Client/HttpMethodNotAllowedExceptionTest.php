<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpMethodNotAllowedExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Http\Client;

use Jitesoft\Exceptions\Http\Client\HttpMethodNotAllowedException;
use Jitesoft\Exceptions\Tests\Http\HttpExceptionTest;

/**
 * @group Exceptions
 * @group HttpExceptions
 * @group RuntimeExceptions
 * @group HttpClientExceptions
 */
class HttpMethodNotAllowedExceptionTest extends HttpExceptionTest {

    protected $expectedErrorCode = 405;

    protected function throwDefaultException(): void {
        throw new HttpMethodNotAllowedException();
    }

    public function throwMessageException(string $message): void {
        throw new HttpMethodNotAllowedException($message);
    }

}
