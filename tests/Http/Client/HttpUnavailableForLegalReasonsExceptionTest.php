<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpUnavailableForLegalReasonsExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Http\Client;

use Jitesoft\Exceptions\Http\Client\HttpGoneException;
use Jitesoft\Exceptions\Http\Client\HttpUnavailableForLegalReasonsException;
use Jitesoft\Exceptions\Tests\Http\HttpExceptionTest;

/**
 * @group Exceptions
 * @group HttpExceptions
 * @group RuntimeExceptions
 * @group HttpClientExceptions
 */
class HttpUnavailableForLegalReasonsExceptionTest extends HttpExceptionTest {

    protected $expectedErrorCode = 451;

    protected function throwDefaultException(): void {
        throw new HttpUnavailableForLegalReasonsException();
    }

    public function throwMessageException(string $message): void {
        throw new HttpUnavailableForLegalReasonsException($message);
    }

}
