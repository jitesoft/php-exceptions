<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  InvalidArgumentExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Logic;

use Jitesoft\Exceptions\Logic\InvalidArgumentException;
use Jitesoft\Exceptions\Tests\ExceptionTestCase;

class InvalidArgumentExceptionTest extends ExceptionTestCase {

    protected static function getTestProperties() {
        return array_merge(parent::getTestProperties(), [ 'argumentName', 'methodName', 'className' ]);
    }

    protected function throwDefaultException() {
        throw new InvalidArgumentException();
    }

    protected function throwMessageException(string $message) {
        throw new InvalidArgumentException(
            $message,
            '$message',
            'throwMessageException',
            'InvalidArgumentExceptionTest');
    }

    public function testGetArgumentName() {
        try {
            $this->throwMessageException("Test");
        } catch(InvalidArgumentException $ex) {
            $this->assertEquals('$message', $ex->getArgumentName());
            $this->assertEquals('$message', $ex->argumentName);
        }
    }

    public function testGetMethodName() {
        try {
            $this->throwMessageException("Test");
        } catch(InvalidArgumentException $ex) {
            $this->assertEquals('throwMessageException', $ex->getMethodName());
            $this->assertEquals('throwMessageException', $ex->methodName);
        }
    }

    public function testGetClassName() {
        try {
            $this->throwMessageException("Test");
        } catch(InvalidArgumentException $ex) {
            $this->assertEquals('InvalidArgumentExceptionTest', $ex->getClassName());
            $this->assertEquals('InvalidArgumentExceptionTest', $ex->className);
        }
    }

}
