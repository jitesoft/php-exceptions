<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  InvalidArgumentExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Logic;

use Jitesoft\Exceptions\Logic\InvalidArgumentException;
use Jitesoft\Exceptions\Tests\ExceptionTestCase;

class InvalidArgumentExceptionTest extends ExceptionTestCase {

    protected static function getTestProperties(): array {
        return array_merge(parent::getTestProperties(), [ 'argumentName', 'methodName', 'className' ]);
    }

    protected function throwDefaultException(): void {
        throw new InvalidArgumentException();
    }

    protected function throwMessageException(string $message): void {
        throw new InvalidArgumentException(
            $message,
            '$message',
            'throwMessageException',
            'InvalidArgumentExceptionTest');
    }

    public function testGetArgumentName(): void {
        try {
            $this->throwMessageException("Test");
        } catch(InvalidArgumentException $ex) {
            self::assertEquals('$message', $ex->getArgumentName());
            self::assertEquals('$message', $ex->argumentName);
        }
    }

    public function testGetMethodName(): void {
        try {
            $this->throwMessageException("Test");
        } catch(InvalidArgumentException $ex) {
            self::assertEquals('throwMessageException', $ex->getMethodName());
            self::assertEquals('throwMessageException', $ex->methodName);
        }
    }

    public function testGetClassName(): void {
        try {
            $this->throwMessageException("Test");
        } catch(InvalidArgumentException $ex) {
            self::assertEquals('InvalidArgumentExceptionTest', $ex->getClassName());
            self::assertEquals('InvalidArgumentExceptionTest', $ex->className);
        }
    }

}
