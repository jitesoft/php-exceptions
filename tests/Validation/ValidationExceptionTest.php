<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  ValidationExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Validation;

use Jitesoft\Exceptions\Tests\ExceptionTestCase;
use Jitesoft\Exceptions\Validation\ValidationException;

/**
 * @group ValidationExceptions
 */
class ValidationExceptionTest extends ExceptionTestCase {

    protected function getDefaultException(): \Jitesoft\Exceptions\JitesoftException {
        return new ValidationException();
    }

    public function getMessageException(string $message): \Jitesoft\Exceptions\JitesoftException {
        throw new ValidationException($message);
    }

}
