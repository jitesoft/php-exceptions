<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  SecurityExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Security;

use Jitesoft\Exceptions\Security\SecurityException;
use Jitesoft\Exceptions\Tests\ExceptionTestCase;

/**
 * @group SecurityExceptions
 */
class SecurityExceptionTest extends ExceptionTestCase {

    protected function throwDefaultException() {
        throw new SecurityException();
    }

    public function throwMessageException(string $message) {
        throw new SecurityException($message);
    }

}
