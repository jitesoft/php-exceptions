<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  IOExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\IO;

use Jitesoft\Exceptions\IO\IOException;
use Jitesoft\Exceptions\JitesoftException;
use Jitesoft\Exceptions\Tests\ExceptionTestCase;

/**
 * @group IOExceptions
 * @group RuntimeExceptions
 */
class IOExceptionTest extends ExceptionTestCase {

    public function testGetPath() {
        try {
            throw $this->getMessageException("Test");
        } catch (IOException $ex) {
            $this->assertEquals("/a/b/c", $ex->getPath());
            $this->assertEquals("/a/b/c", $ex->path);
        }
    }

    protected static function getTestProperties() {
        return array_merge(parent::getTestProperties(), [ 'path' ]);
    }

    protected function getDefaultException(): JitesoftException {
        return new IOException();
    }

    protected function getMessageException(string $message): JitesoftException {
        return new IOException($message,"/a/b/c");
    }
}
