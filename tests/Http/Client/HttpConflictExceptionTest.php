<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpConflictExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Http\Client;

use Jitesoft\Exceptions\Http\Client\HttpConflictException;
use Jitesoft\Exceptions\Tests\Http\HttpExceptionTest;

/**
 * @group Exceptions
 * @group HttpExceptions
 * @group RuntimeExceptions
 * @group HttpClientExceptions
 */
class HttpConflictExceptionTest extends HttpExceptionTest {

    protected $expectedErrorCode = 409;

    protected function throwDefaultException(): void {
        throw new HttpConflictException();
    }

    public function throwMessageException(string $message): void {
        throw new HttpConflictException($message);
    }

}
