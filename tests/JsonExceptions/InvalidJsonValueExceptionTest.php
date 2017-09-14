<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  InvalidJsonValueExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\JsonExceptions;

use Jitesoft\Exceptions\JsonExceptions\InvalidJsonValueException;

/**
 * @group RuntimeExceptions
 * @group JsonExceptions
 */
class InvalidJsonValueExceptionTest extends JsonExceptionTest {

    protected static function getTestProperties() {
        return array_merge(parent::getTestProperties(), [ 'property_name' ]);
    }

    public function throwDefaultMessage() {
        $this->setExpectedMessage("Invalid JSON value (Property: test).");
        throw new InvalidJsonValueException("test", "invalid", "/a/b/c", "a.json");
    }

    public function throwNoneDefaultMessage() {
        $this->setExpectedMessage("Test");
        throw new InvalidJsonValueException("test", "invalid", "/a/b/c", "a.json", "Test");
    }

    public function testGetPropertyName() {
        try {
            $this->throwDefaultMessage();
        } catch (InvalidJsonValueException $ex) {
            $this->assertEquals("test", $ex->getPropertyName());
            $this->assertEquals("test", $ex->propertyName);
        }
    }

}
