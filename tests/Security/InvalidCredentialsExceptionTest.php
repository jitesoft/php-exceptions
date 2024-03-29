<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  InvalidCredentialsException.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Security;

use Jitesoft\Exceptions\Security\InvalidCredentialsException;

/**
 * @group SecurityExceptions
 * @group AuthenticationExceptions
 */
class InvalidCredentialsExceptionTest extends AuthenticationExceptionTest {

    protected function throwDefaultException(): void {
        throw new InvalidCredentialsException();
    }

    public function throwMessageException(string $message): void {
        throw new InvalidCredentialsException($message);
    }

}
