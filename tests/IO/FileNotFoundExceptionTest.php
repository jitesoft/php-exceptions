<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  FileNotFoundExceptonTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\IO;

use Jitesoft\Exceptions\IO\FileNotFoundException;
use Jitesoft\Exceptions\JitesoftException;

/**
 * @group IOExceptions
 * @group FileExceptions
 * @group RuntimeExceptions
 */
class FileNotFoundExceptionTest extends FileExceptionTest {

    protected function getDefaultException(): JitesoftException {
        return new FileNotFoundException("a.txt", "/a/b/c");
    }

    public function getMessageException(string $message): JitesoftException {
        throw new FileNotFoundException($message, "a.txt", "/a/b/c");
    }
}
