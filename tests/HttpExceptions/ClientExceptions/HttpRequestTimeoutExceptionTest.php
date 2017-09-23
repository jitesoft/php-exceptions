<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpRequestTimeoutExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\HttpExceptions\ClientExceptions;

use Jitesoft\Exceptions\HttpExceptions\ClientExceptions\HttpRequestTimeoutException;
use Jitesoft\Exceptions\JitesoftException;
use Jitesoft\Exceptions\Tests\HttpExceptions\HttpExceptionTest;

/**
 * @group Exceptions
 * @group HttpExceptions
 * @group RuntimeExceptions
 * @group HttpClientExceptions
 */
class HttpRequestTimeoutExceptionTest extends HttpExceptionTest {

    protected $expectedErrorCode = 408;

    protected function getDefaultException(): JitesoftException {
        return new HttpRequestTimeoutException();
    }

    public function getMessageException(string $message): JitesoftException {
        return new HttpRequestTimeoutException($message);
    }

}
