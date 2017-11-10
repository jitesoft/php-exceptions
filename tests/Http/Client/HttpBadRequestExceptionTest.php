<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpBadRequestExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Http\Client;

use Jitesoft\Exceptions\Http\Client\HttpBadRequestException;
use Jitesoft\Exceptions\JitesoftException;
use Jitesoft\Exceptions\Tests\Http\HttpExceptionTest;

/**
 * @group Exceptions
 * @group HttpExceptions
 * @group RuntimeExceptions
 * @group HttpClientExceptions
 */
class HttpBadRequestExceptionTest extends HttpExceptionTest {

    protected $expectedErrorCode = 400;

    protected function getDefaultException(): JitesoftException {
        return new HttpBadRequestException();
    }

    public function getMessageException(string $message): JitesoftException {
        return new HttpBadRequestException($message);
    }

}
