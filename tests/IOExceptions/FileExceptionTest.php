<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  FileExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\IOExceptions;

use Jitesoft\Exceptions\IOExceptions\FileException;
use Jitesoft\Exceptions\JitesoftException;

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

    protected function getDefaultException(): JitesoftException {
        return new FileException("a.txt", "/a/b/c");
    }

    public function getMessageException(string $message): JitesoftException {
        throw new FileException("Test", "a.txt", "/a/b/c");
    }

    public function testGetFileName() {
        try {
            throw $this->getMessageException("Test");
        } catch (FileException $ex) {
            $this->assertEquals("a.txt", $ex->getFileName());
            $this->assertEquals("a.txt", $ex->fileName);
        }
    }


}
