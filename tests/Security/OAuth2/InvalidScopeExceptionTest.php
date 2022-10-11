<?php

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  InvalidScopeExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2018
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

namespace Jitesoft\Exceptions\Tests\Security\OAuth2;

use Jitesoft\Exceptions\Security\OAuth2\InvalidScopeException;

class InvalidScopeExceptionTest extends OAuth2ExceptionTest {

    public static function getTestProperties(): array {
        return array_merge(parent::getTestProperties(), ['scope']);
    }

    public function throwDefaultException(): void {
        throw new InvalidScopeException();
    }

    public function throwMessageException(string $message): void {
        throw new InvalidScopeException($message, 'scope_name');
    }

    public function testGetScope(): void {
        try {
            $this->throwMessageException('Test');
        } catch (InvalidScopeException $ex) {
            $this->assertEquals('scope_name', $ex->getScope());
            $this->assertEquals('scope_name', $ex->scope);
        }
    }

}
