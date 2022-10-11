<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  AssertionExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Assertions;

use Jitesoft\Exceptions\Assertion\AssertionException;
use Jitesoft\Exceptions\Tests\ExceptionTestCase;

class AssertionExceptionTest extends ExceptionTestCase {

    protected static function getTestProperties(): array {
        return array_merge(parent::getTestProperties(), [ 'actual', 'expected' ]);
    }

    protected function throwDefaultException(): void {
        throw new AssertionException();
    }

    public function throwMessageException(string $message): void {
        throw new AssertionException($message, "string", "array");
    }

    public function testGetActual(): void {
        try {
            $this->throwMessageException("Hi!");
        } catch (AssertionException $ex) {
            self::assertEquals('string', $ex->getActual());
            self::assertEquals('string', $ex->actual);
        }
    }

    public function testGetExpected(): void {
        try {
            $this->throwMessageException("Hi!");
        } catch (AssertionException $ex) {
            self::assertEquals('array', $ex->getExpected());
            self::assertEquals('array', $ex->expected);
        }
    }

}
