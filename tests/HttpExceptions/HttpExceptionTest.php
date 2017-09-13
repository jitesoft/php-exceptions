<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\HttpExceptions;

use Jitesoft\Exceptions\HttpExceptions\HttpException;
use Jitesoft\Exceptions\Tests\ExceptionTestCase;

/**
 * @group Exceptions
 * @group HttpExceptions
 * @group RuntimeExceptions
 */
class HttpExceptionTest extends ExceptionTestCase {

    public function throwDefaultMessage() {
        $this->setExpectedMessage("Unexpected HTTP exception.");
        throw new HttpException();
    }

    public function throwNoneDefaultMessage() {
        $this->setExpectedMessage("Test");
        throw new HttpException("Test");
    }
}
