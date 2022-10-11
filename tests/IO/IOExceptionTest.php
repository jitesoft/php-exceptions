<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  IOExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\IO;

use Jitesoft\Exceptions\IO\IOException;
use Jitesoft\Exceptions\Tests\ExceptionTestCase;

/**
 * @group IOExceptions
 * @group RuntimeExceptions
 */
class IOExceptionTest extends ExceptionTestCase {

    public function testGetPath(): void {
        try {
            $this->throwMessageException("Test");
        } catch (IOException $ex) {
            self::assertEquals("/a/b/c", $ex->getPath());
            self::assertEquals("/a/b/c", $ex->path);
        }
    }

    protected static function getTestProperties(): array {
        return array_merge(parent::getTestProperties(), [ 'path' ]);
    }

    protected function throwDefaultException(): void {
        throw new IOException();
    }

    protected function throwMessageException(string $message): void {
        throw new IOException($message,"/a/b/c");
    }
}
