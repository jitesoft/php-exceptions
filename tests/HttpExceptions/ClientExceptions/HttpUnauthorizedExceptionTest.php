<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpUnauthorizedExceptionTest.php - Part of the php-exceptions project.

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
class HttpUnauthorizedExceptionTest extends HttpExceptionTest {

    protected $expectedErrorCode = 401;

    protected function getDefaultException(): JitesoftException {
        return new HttpUnauthorizedException();
    }

    public function getMessageException(string $message): JitesoftException {
        return new HttpUnauthorizedException($message);
    }

}
