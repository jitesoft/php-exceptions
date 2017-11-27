<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  InvalidJsonValueExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Json;

use Jitesoft\Exceptions\Json\InvalidJsonValueException;

/**
 * @group RuntimeExceptions
 * @group JsonExceptions
 */
class InvalidJsonValueExceptionTest extends JsonExceptionTest {

    protected static function getTestProperties() {
        return array_merge(parent::getTestProperties(), [ 'property_name' ]);
    }

    protected function throwDefaultException() {
        throw new InvalidJsonValueException();
    }

    public function throwMessageException(string $message) {
        throw new InvalidJsonValueException($message,"test", "invalid", "/a/b/c", "a.json");
    }

    public function testGetPropertyName() {
        try {
            $this->throwMessageException("Test");
        } catch (InvalidJsonValueException $ex) {
            $this->assertEquals("test", $ex->getPropertyName());
            $this->assertEquals("test", $ex->propertyName);
        }
    }

}
