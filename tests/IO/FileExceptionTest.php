<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  FileExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft
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

    protected static function getTestProperties(): array {
        return array_merge(parent::getTestProperties(), [ 'file_name' ]);
    }

    protected function throwDefaultException(): void {
        throw new FileException();
    }

    public function throwMessageException(string $message): void {
        throw new FileException("Test", "a.txt", "/a/b/c");
    }

    public function testGetFileName() {
        try {
            $this->throwMessageException("Test");
        } catch (FileException $ex) {
            self::assertEquals("a.txt", $ex->getFileName());
            self::assertEquals("a.txt", $ex->fileName);
        }
    }


}
