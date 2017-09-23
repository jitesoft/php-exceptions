<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpPaymentRequiredExceptionTest.php - Part of the php-exceptions project.

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
class HttpPaymentRequiredExceptionTest extends HttpExceptionTest {

    protected $expectedErrorCode = 402;

    protected function getDefaultException(): JitesoftException {
        return new HttpPaymentRequiredException();
    }

    public function getMessageException(string $message): JitesoftException {
        return new HttpPaymentRequiredException($message);
    }

}
