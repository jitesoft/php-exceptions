<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  AuthenticationExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Security;

use Jitesoft\Exceptions\Security\AuthenticationException;

/**
 * @group SecurityExceptions
 * @group AuthenticationExceptions
 */
class AuthenticationExceptionTest extends SecurityExceptionTest {

    protected function throwDefaultException() {
        throw new AuthenticationException();
    }

    public function throwMessageException(string $message) {
        throw new AuthenticationException($message);
    }

}
