<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  DirectoryNotFoundExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\IOExceptions;

use Jitesoft\Exceptions\IOExceptions\DirectoryNotFundException;
use Jitesoft\Exceptions\JitesoftException;

/**
 * @group IOExceptions
 * @group DirectoryExceptions
 * @group RuntimeExceptions
 */
class DirectoryNotFoundExceptionTest extends DirectoryExceptionTest {

    protected function getDefaultException(): JitesoftException {
        return new DirectoryNotFundException();
    }

    public function getMessageException(string $message): JitesoftException {
        return new DirectoryNotFundException($message, "/a/b/c");
    }

}
