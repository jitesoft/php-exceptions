<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  InvalidOperationExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\LogicExceptions;

use Jitesoft\Exceptions\LogicExceptions\InvalidOperationException;
use Jitesoft\Exceptions\Tests\ExceptionTestCase;

/**
 * @group LogicExceptions
 */
class InvalidOperationExceptionTest extends ExceptionTestCase {

    public function throwDefaultMessage() {
        $this->setExpectedMessage("Operation invalid.");
        throw new InvalidOperationException();
    }

    public function throwNoneDefaultMessage() {
        $this->setExpectedMessage("Test");
        throw new InvalidOperationException("Test");
    }

}
