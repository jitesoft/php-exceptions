<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  AssertionExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Assertions;

use Jitesoft\Exceptions\Assertion\AssertionException;
use Jitesoft\Exceptions\Tests\ExceptionTestCase;

class AssertionExceptionTest extends ExceptionTestCase {

    protected static function getTestProperties() {
        return array_merge(parent::getTestProperties(), [ 'actual', 'expected' ]);
    }

    protected function throwDefaultException() {
        throw new AssertionException();
    }

    public function throwMessageException(string $message) {
        throw new AssertionException($message, "string", "array");
    }

    public function testGetActual() {
        try {
            $this->throwMessageException("Hi!");
        } catch (AssertionException $ex) {
            $this->assertEquals('string', $ex->getActual());
            $this->assertEquals('string', $ex->actual);
        }
    }

    public function testGetExpected() {
        try {
            $this->throwMessageException("Hi!");
        } catch (AssertionException $ex) {
            $this->assertEquals('array', $ex->getExpected());
            $this->assertEquals('array', $ex->expected);
        }
    }

}
