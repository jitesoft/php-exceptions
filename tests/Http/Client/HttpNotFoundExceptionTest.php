<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpNotFoundExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Http\Client;

use Jitesoft\Exceptions\Http\Client\HttpNotFoundException;
use Jitesoft\Exceptions\Tests\Http\HttpExceptionTest;

/**
 * @group Exceptions
 * @group HttpExceptions
 * @group RuntimeExceptions
 * @group HttpClientExceptions
 */
class HttpNotFoundExceptionTest extends HttpExceptionTest {

    protected $expectedErrorCode = 404;

    protected function throwDefaultException(): void {
        throw new HttpNotFoundException();
    }

    public function throwMessageException(string $message): void {
        throw new HttpNotFoundException($message);
    }

}
