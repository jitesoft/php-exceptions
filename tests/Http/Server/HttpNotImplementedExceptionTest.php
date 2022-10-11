<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpNotImplementedExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Http\Server;

use Jitesoft\Exceptions\Http\Server\HttpNotImplementedException;
use Jitesoft\Exceptions\Tests\Http\HttpExceptionTest;

/**
 * @group Exceptions
 * @group HttpExceptions
 * @group RuntimeExceptions
 * @group HttpServerExceptions
 */
class HttpNotImplementedExceptionTest extends HttpExceptionTest {

    protected $expectedErrorCode = 501;

    protected function throwDefaultException(): void {
        throw new HttpNotImplementedException();
    }

    public function throwMessageException(string $message): void {
        throw new HttpNotImplementedException($message);
    }

}
