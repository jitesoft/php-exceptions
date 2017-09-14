<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  SecurityExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\SecurityExceptions;

use Jitesoft\Exceptions\SecurityExceptions\SecurityException;
use Jitesoft\Exceptions\Tests\ExceptionTestCase;

/**
 * @group SecurityExceptions
 */
class SecurityExceptionTest extends ExceptionTestCase {

    public function throwDefaultMessage() {
        $this->setExpectedMessage("Unexpected security error.");
        throw new SecurityException();
    }

    public function throwNoneDefaultMessage() {
        $this->setExpectedMessage("Test");
        throw new SecurityException("Test");
    }

}
