<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Http;

use Jitesoft\Exceptions\Http\HttpException;
use Jitesoft\Exceptions\Tests\ExceptionTestCase;
use Jitesoft\Exceptions\JitesoftException;

/**
 * @group Exceptions
 * @group HttpExceptions
 * @group RuntimeExceptions
 */
class HttpExceptionTest extends ExceptionTestCase {

    protected $expectedErrorCode = 0;

    protected function getDefaultException(): JitesoftException {
        return new HttpException();
    }

    public function getMessageException(string $message): JitesoftException {
        throw new HttpException($message);
    }

    public function testDefaultErrorCode() {
        try {
            throw $this->getDefaultException();
        } catch (JitesoftException $ex) {
            $this->assertEquals($this->expectedErrorCode, $ex->getCode());
        }
    }
}
