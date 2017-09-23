<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpUnsupportedMediaTypeExceptionTest.php - Part of the php-exceptions project.

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
class HttpUnsupportedMediaTypeExceptionTest extends HttpExceptionTest {

    protected $expectedErrorCode = 415;

    protected function getDefaultException(): JitesoftException {
        return new HttpUnsupportedMediaTypeException();
    }

    public function getMessageException(string $message): JitesoftException {
        return new HttpUnsupportedMediaTypeException($message);
    }

}
