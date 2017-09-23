<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpNotFoundExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\HttpExceptions\ClientExceptions;

use Jitesoft\Exceptions\JitesoftException;
use Jitesoft\Exceptions\Tests\HttpExceptions\HttpExceptionTest;

/**
 * @group Exceptions
 * @group HttpExceptions
 * @group RuntimeExceptions
 * @group HttpClientExceptions
 */
class HttpNotFoundExceptionTest extends HttpExceptionTest {

    protected $expectedErrorCode = 404;

    protected function getDefaultException(): JitesoftException {
        return new HttpNotFoundException();
    }

    public function getMessageException(string $message): JitesoftException {
        return new HttpNotFoundException($message);
    }

}
