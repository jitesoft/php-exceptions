<?php

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  IOExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

namespace Jitesoft\Exceptions\Tests\IOExceptions;

use Jitesoft\Exceptions\IOExceptions\IOException;
use Jitesoft\Exceptions\Tests\ExceptionTestCase;

/**
 * @group IOExceptions
 * @group RuntimeExceptions
 */
class IOExceptionTest extends ExceptionTestCase {

    public function testGetPath() {
        try {
            $this->throwDefaultMessage();
        } catch (IOException $ex) {
            $this->assertEquals("/a/b/c", $ex->getPath());
            $this->assertEquals("/a/b/c", $ex->path);
        }
    }

    protected static function getTestProperties() {
        return array_merge(parent::getTestProperties(), [ 'path' ]);
    }

    public function throwDefaultMessage() {
        $this->setExpectedMessage("Unexpected IO error.");
        throw new IOException("/a/b/c");
    }

    public function throwNoneDefaultMessage() {
        $this->setExpectedMessage("Test");
        throw new IOException("/a/b/c", "Test");
    }
}
