<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  FileNotFoundExceptonTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\IOExceptions;

use Jitesoft\Exceptions\IOExceptions\FileNotFoundException;


/**
 * @group IOExceptions
 * @group FileExceptions
 * @group RuntimeExceptions
 */
class FileNotFoundExceptionTest extends FileExceptionTest {

    public function throwDefaultMessage() {
        $this->setExpectedMessage("Failed to find file a.txt.");
        throw new FileNotFoundException("a.txt", "/a/b/c");
    }

    public function throwNoneDefaultMessage() {
        $this->setExpectedMessage("Test");
        throw new FileNotFoundException("a.txt", "/a/b/c","Test");
    }
}
