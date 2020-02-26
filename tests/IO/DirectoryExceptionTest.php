<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  DirectoryExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\IO;

use Jitesoft\Exceptions\IO\DirectoryException;

/**
 * @group IOExceptions
 * @group DirectoryExceptions
 * @group RuntimeExceptions
 */
class DirectoryExceptionTest extends IOExceptionTest {

    protected function throwDefaultException() {
        throw new DirectoryException();
    }

    public function throwMessageException(string $message) {
        throw new DirectoryException($message,"/a/b/c");
    }
}
