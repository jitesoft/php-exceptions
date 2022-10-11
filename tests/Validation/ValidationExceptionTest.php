<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  ValidationExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Validation;

use Jitesoft\Exceptions\Tests\ExceptionTestCase;
use Jitesoft\Exceptions\Validation\ValidationException;

/**
 * @group ValidationExceptions
 */
class ValidationExceptionTest extends ExceptionTestCase {
    protected static function getTestProperties(): array {
        return [...parent::getTestProperties(), 'errors'];
    }

    protected function throwDefaultException(): void {
        throw new ValidationException();
    }

    public function throwMessageException(string $message): void {
        throw new ValidationException($message, [
            'something' => 'else',
            'and'       => 'something'
        ]);
    }

    public function testErrors(): void {
        try {
            $this->throwMessageException('test');
        } catch (ValidationException $ex) {
            self::assertEquals([
                'something' => 'else',
                'and'       => 'something'
            ], $ex->getErrors());
            self::assertEquals([
                'something' => 'else',
                'and'       => 'something'
            ], $ex->errors);
        }

    }

}
