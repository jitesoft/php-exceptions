<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  ValidationExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\ValidationExceptions;

use Jitesoft\Exceptions\Tests\ExceptionTestCase;
use Jitesoft\Exceptions\ValidationExceptions\ValidationException;

/**
 * @group ValidationExceptions
 */
class ValidationExceptionTest extends ExceptionTestCase {

    public function throwDefaultMessage() {
        $this->setExpectedMessage("Validation failed.");
        throw new ValidationException();
    }

    public function throwNoneDefaultMessage() {
        $this->setExpectedMessage("Test");
        throw new ValidationException("Test");
    }

}
