<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  AuthenticationExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\SecurityExceptions;

use Jitesoft\Exceptions\SecurityExceptions\AuthenticationException;

/**
 * @group SecurityExceptions
 * @group AuthenticationExceptions
 */
class AuthenticationExceptionTest extends SecurityExceptionTest {

    public function throwDefaultMessage() {
        $this->setExpectedMessage("Authentication failed.");
        throw new AuthenticationException();
    }

    public function throwNoneDefaultMessage() {
        $this->setExpectedMessage("Test");
        throw new AuthenticationException("Test");
    }

}
