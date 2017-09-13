<?php

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  FileExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

namespace Jitesoft\Exceptions\Tests\IOExceptions;

use Jitesoft\Exceptions\IOExceptions\FileException;

/**
 *
 * @group IOExceptions
 * @group RuntimeExceptions
 * @group FileExceptions
 */
class FileExceptionTest extends IOExceptionTest {

    protected static function getTestProperties() {
        return array_merge(parent::getTestProperties(), [ 'file_name' ]);
    }

    public function throwDefaultMessage() {
        $this->setExpectedMessage("Unexpected file error.");
        throw new FileException("a.txt", "/a/b/c");
    }

    public function throwNoneDefaultMessage() {
        $this->setExpectedMessage("Test");
        throw new FileException("", "", "Test");
    }

    public function testGetFileName() {
        try {
            $this->throwDefaultMessage();
        } catch (FileException $ex) {
            $this->assertEquals("a.txt", $ex->getFileName());
            $this->assertEquals("a.txt", $ex->fileName);
        }
    }


}
