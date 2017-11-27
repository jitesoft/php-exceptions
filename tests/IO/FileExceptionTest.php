<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  FileExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\IO;

use Jitesoft\Exceptions\IO\FileException;

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

    protected function throwDefaultException() {
        throw new FileException();
    }

    public function throwMessageException(string $message) {
        throw new FileException("Test", "a.txt", "/a/b/c");
    }

    public function testGetFileName() {
        try {
            $this->throwMessageException("Test");
        } catch (FileException $ex) {
            $this->assertEquals("a.txt", $ex->getFileName());
            $this->assertEquals("a.txt", $ex->fileName);
        }
    }


}
