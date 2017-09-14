<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  DirectoryNotFoundExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\IOExceptions;

use Jitesoft\Exceptions\IOExceptions\DirectoryNotFundException;

/**
 * @group IOExceptions
 * @group DirectoryExceptions
 * @group RuntimeExceptions
 */
class DirectoryNotFoundExceptionTest extends DirectoryExceptionTest {

    public function throwDefaultMessage() {
        $this->setExpectedMessage("Failed to find directory /a/b/c.");
        throw new DirectoryNotFundException("/a/b/c");
    }

    public function throwNoneDefaultMessage() {
        $this->setExpectedMessage("Test");
        throw new DirectoryNotFundException("abc", "Test");
    }

}
