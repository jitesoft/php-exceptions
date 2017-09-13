<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  DatabaseExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\DatabaseExceptions;

use Jitesoft\Exceptions\DatabaseExceptions\DatabaseException;
use Jitesoft\Exceptions\Tests\ExceptionTestCase;

/**
 * @group Exceptions
 * @group DatabaseExceptions
 * @group RuntimeExceptions
 */
class DatabaseExceptionTest extends ExceptionTestCase {

    public function throwDefaultMessage() {
        $this->setExpectedMessage("Unexpected database error.");
        throw new DatabaseException();
    }

    public function throwNoneDefaultMessage() {
        $this->setExpectedMessage("Test");
        throw new DatabaseException("Test");
    }
}
