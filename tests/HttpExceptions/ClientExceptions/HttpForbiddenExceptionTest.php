<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpForbiddenExceptionTest.php - Part of the php-exceptions project.

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
class HttpForbiddenExceptionTest extends HttpExceptionTest {

    protected $expectedErrorCode = 403;

    protected function getDefaultException(): JitesoftException {
        return new HttpForbiddenException();
    }

    public function getMessageException(string $message): JitesoftException {
        return new HttpForbiddenException($message);
    }

}
