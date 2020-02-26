<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  FileNotFoundExceptonTest.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\IO;

use Jitesoft\Exceptions\IO\FileNotFoundException;

/**
 * @group IOExceptions
 * @group FileExceptions
 * @group RuntimeExceptions
 */
class FileNotFoundExceptionTest extends FileExceptionTest {

    protected function throwDefaultException() {
        throw new FileNotFoundException();
    }

    public function throwMessageException(string $message) {
        throw new FileNotFoundException($message, "a.txt", "/a/b/c");
    }
}
