<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  InvalidCredentialsException.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\SecurityExceptions;

use Jitesoft\Exceptions\SecurityExceptions\InvalidCredentialsException;

/**
 * @group SecurityExceptions
 * @group AuthenticationExceptions
 */
class InvalidCredentialsExceptionTest extends AuthenticationExceptionTest {

    public function throwDefaultMessage() {
        $this->setExpectedMessage("Invalid credentials.");
        throw new InvalidCredentialsException();
    }

    public function throwNoneDefaultMessage() {
        $this->setExpectedMessage("Test");
        throw new InvalidCredentialsException("Test");
    }

}
