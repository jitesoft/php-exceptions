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

    public function testGetPath() {
        try {
            $this->throwMessageException("Test");
        } catch (IOException $ex) {
            $this->assertEquals("/a/b/c", $ex->getPath());
            $this->assertEquals("/a/b/c", $ex->path);
        }
    }

    protected static function getTestProperties() {
        return array_merge(parent::getTestProperties(), [ 'path' ]);
    }

    protected function throwDefaultException() {
        throw new IOException();
    }

    protected function throwMessageException(string $message) {
        throw new IOException($message,"/a/b/c");
    }
}
