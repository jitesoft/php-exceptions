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

    protected function throwDefaultException(): void {
        throw new AuthenticationException();
    }

    public function throwMessageException(string $message): void {
        throw new AuthenticationException($message);
    }

}
