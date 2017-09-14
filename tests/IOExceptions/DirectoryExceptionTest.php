<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  DirectoryExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\IOExceptions;

use Jitesoft\Exceptions\IOExceptions\DirectoryException;
use Jitesoft\Exceptions\JitesoftException;

/**
 * @group IOExceptions
 * @group DirectoryExceptions
 * @group RuntimeExceptions
 */
class DirectoryExceptionTest extends IOExceptionTest {

    protected function getDefaultException(): JitesoftException {
        return new DirectoryException();
    }

    public function getMessageException(string $message): JitesoftException {
        throw new DirectoryException($message,"/a/b/c");
    }
}
