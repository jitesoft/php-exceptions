<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpConflictExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\HttpExceptions\ClientExceptions;

use Jitesoft\Exceptions\HttpExceptions\ClientExceptions\HttpConflictException;
use Jitesoft\Exceptions\JitesoftException;
use Jitesoft\Exceptions\Tests\HttpExceptions\HttpExceptionTest;

/**
 * @group Exceptions
 * @group HttpExceptions
 * @group RuntimeExceptions
 * @group HttpClientExceptions
 */
class HttpConflictExceptionTest extends HttpExceptionTest {

    protected $expectedErrorCode = 409;

    protected function getDefaultException(): JitesoftException {
        return new HttpConflictException();
    }

    public function getMessageException(string $message): JitesoftException {
        return new HttpConflictException($message);
    }

}
