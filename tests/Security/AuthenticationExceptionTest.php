<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  AuthenticationExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Security;

use Jitesoft\Exceptions\Security\AuthenticationException;

/**
 * @group SecurityExceptions
 * @group AuthenticationExceptions
 */
class AuthenticationExceptionTest extends SecurityExceptionTest {

    protected function getDefaultException(): \Jitesoft\Exceptions\JitesoftException {
        return new AuthenticationException();
    }

    public function getMessageException(string $message): \Jitesoft\Exceptions\JitesoftException {
        return new AuthenticationException($message);
    }

}
