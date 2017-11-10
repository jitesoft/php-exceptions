<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  DatabaseExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Database;

use Jitesoft\Exceptions\Database\DatabaseException;
use Jitesoft\Exceptions\JitesoftException;
use Jitesoft\Exceptions\Tests\ExceptionTestCase;

/**
 * @group Exceptions
 * @group DatabaseExceptions
 * @group RuntimeExceptions
 */
class DatabaseExceptionTest extends ExceptionTestCase {

    protected function getDefaultException() : JitesoftException {
        return new DatabaseException();
    }

    public function getMessageException(string $message) : JitesoftException {
        return new DatabaseException($message);
    }
}
