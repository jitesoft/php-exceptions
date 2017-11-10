<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  InvalidCredentialsException.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Security;

use Jitesoft\Exceptions\JitesoftException;
use Jitesoft\Exceptions\Security\InvalidCredentialsException;

/**
 * @group SecurityExceptions
 * @group AuthenticationExceptions
 */
class InvalidCredentialsExceptionTest extends AuthenticationExceptionTest {

    protected function getDefaultException(): JitesoftException {
        return new InvalidCredentialsException();
    }

    public function getMessageException(string $message): JitesoftException {
        throw new InvalidCredentialsException($message);
    }

}
