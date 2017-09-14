<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  InvalidJsonExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\JsonExceptions;

use Jitesoft\Exceptions\JsonExceptions\InvalidJsonException;

/**
 * @group RuntimeExceptions
 * @group JsonExceptions
 */
class InvalidJsonExceptionTest extends JsonExceptionTest {
    public function throwDefaultMessage() {
        $this->setExpectedMessage("Invalid JSON.");
        throw new InvalidJsonException("invalid", "/a/b/c", "a.json");
    }

    public function throwNoneDefaultMessage() {
        $this->setExpectedMessage("Test");
        throw new InvalidJsonException("invalid", "/a/b/c", "a.json", "Test");
    }
}
