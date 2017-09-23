<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpNotAcceptableExceptionTest.php - Part of the php-exceptions project.

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
class HttpNotAcceptableExceptionTest extends HttpExceptionTest {

    protected $expectedErrorCode = 406;

    protected function getDefaultException(): JitesoftException {
        return new HttpNotAcceptableException();
    }

    public function getMessageException(string $message): JitesoftException {
        return new HttpNotAcceptableException($message);
    }

}
