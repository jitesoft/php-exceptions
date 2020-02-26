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

    protected function throwDefaultException() {
        throw new ValidationException();
    }

    public function throwMessageException(string $message) {
        throw new ValidationException($message);
    }

}
