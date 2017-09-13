<?php

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  ParseExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

namespace Jitesoft\Exceptions\Tests\IOExceptions;
use Jitesoft\Exceptions\IOExceptions\ParseException;

/**
 * @group IOExceptions
 * @group FileExceptions
 * @group RuntimeExceptions
 */
class ParseExceptionTest extends FileExceptionTest {
    public function throwDefaultMessage() {
        $this->setExpectedMessage("Failed to parse file a.txt.");
        throw new ParseException("a.txt", "/a/b/c");
    }

    public function throwNoneDefaultMessage() {
        $this->setExpectedMessage("Test");
        throw new ParseException("a.txt", "/a/b/c", "Test");
    }
    
}
