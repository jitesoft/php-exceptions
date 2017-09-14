<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  JsonParseExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\JsonExceptions;

use Jitesoft\Exceptions\JsonExceptions\JsonParseException;

/**
 * @group RuntimeExceptions
 * @group JsonExceptions
 */
class JsonParseExceptionTest extends JsonExceptionTest {

    public function throwDefaultMessage() {
        $this->setExpectedMessage("Failed to parse JSON.");
        throw new JsonParseException("invalid", "/a/b/c", "a.json");
    }

    public function throwNoneDefaultMessage() {
        $this->setExpectedMessage("Test");
        throw new JsonParseException("invalid", "/a/b/c", "a.json", "Test");
    }
}
