<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  DirectoryExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\IOExceptions;

use Jitesoft\Exceptions\IOExceptions\DirectoryException;

/**
 * @group IOExceptions
 * @group Exceptions
 * @group RuntimeExceptions
 */
class DirectoryExceptionTest extends IOExceptionTest {

    public function throwDefaultMessage() {
        $this->setExpectedMessage("Unexpected directory error.");
        throw new DirectoryException("/a/b/c");
    }

    public function throwNoneDefaultMessage() {
        $this->setExpectedMessage("Test");
        throw new DirectoryException("/a/b/c", "Test");
    }
}
