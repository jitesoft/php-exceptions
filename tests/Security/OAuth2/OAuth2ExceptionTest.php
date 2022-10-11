<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  OAuth2ExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2018
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Security\OAuth2;

use Jitesoft\Exceptions\Security\OAuth2\OAuth2Exception;
use Jitesoft\Exceptions\Tests\Security\SecurityExceptionTest;

class OAuth2ExceptionTest extends SecurityExceptionTest {

    protected function throwDefaultException(): void {
        throw new OAuth2Exception();
    }

    public function throwMessageException(string $message): void {
        throw new OAuth2Exception($message);
    }

}
