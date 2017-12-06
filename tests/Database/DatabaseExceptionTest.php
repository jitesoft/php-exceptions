<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  DatabaseExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Database;

use Jitesoft\Exceptions\Database\DatabaseException;
use Jitesoft\Exceptions\Tests\ExceptionTestCase;

/**
 * @group Exceptions
 * @group DatabaseExceptions
 * @group RuntimeExceptions
 */
class DatabaseExceptionTest extends ExceptionTestCase {

    protected function throwDefaultException() {
        throw new DatabaseException();
    }

    public function throwMessageException(string $message) {
        throw new DatabaseException($message);
    }
}
