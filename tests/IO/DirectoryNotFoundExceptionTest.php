<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  DirectoryNotFoundExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\IO;

use Jitesoft\Exceptions\IO\DirectoryNotFundException;

/**
 * @group IOExceptions
 * @group DirectoryExceptions
 * @group RuntimeExceptions
 */
class DirectoryNotFoundExceptionTest extends DirectoryExceptionTest {

    protected function throwDefaultException() {
        throw new DirectoryNotFundException();
    }

    public function throwMessageException(string $message) {
        throw new DirectoryNotFundException($message, "/a/b/c");
    }

}
