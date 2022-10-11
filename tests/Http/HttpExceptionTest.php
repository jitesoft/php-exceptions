<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft
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

    protected function throwDefaultException(): void {
        throw new HttpException();
    }

    public function throwMessageException(string $message) : void{
        throw new HttpException($message);
    }

    public function testDefaultErrorCode(): void {
        try {
            $this->throwDefaultException();
        } catch (JitesoftException $ex) {
            self::assertEquals($this->expectedErrorCode, $ex->getCode());
        }
    }
}
