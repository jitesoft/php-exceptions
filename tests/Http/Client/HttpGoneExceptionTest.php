<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpGoneExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Http\Client;

use Jitesoft\Exceptions\Http\Client\HttpGoneException;
use Jitesoft\Exceptions\JitesoftException;
use Jitesoft\Exceptions\Tests\Http\HttpExceptionTest;

/**
 * @group Exceptions
 * @group HttpExceptions
 * @group RuntimeExceptions
 * @group HttpClientExceptions
 */
class HttpGoneExceptionTest extends HttpExceptionTest {

    protected $expectedErrorCode = 410;

    protected function getDefaultException(): JitesoftException {
        return new HttpGoneException();
    }

    public function getMessageException(string $message): JitesoftException {
        return new HttpGoneException($message);
    }

}
