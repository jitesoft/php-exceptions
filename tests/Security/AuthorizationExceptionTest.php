<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  AuthorizationExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Security;

use Jitesoft\Exceptions\Security\AuthenticationException;
use Jitesoft\Exceptions\Security\AuthorizationException;

/**
 * @group SecurityExceptions
 * @group AuthorizationExceptionTest
 */
class AuthorizationExceptionTest extends SecurityExceptionTest {

    protected function throwDefaultException(): void {
        throw new AuthenticationException();
    }

    public function throwMessageException(string $message): void {
        throw new AuthorizationException($message);
    }

}
