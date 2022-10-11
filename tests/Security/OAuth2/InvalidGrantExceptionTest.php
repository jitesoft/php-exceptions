<?php

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  InvalidGrantExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2018
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

namespace Jitesoft\Exceptions\Tests\Security\OAuth2;

use Jitesoft\Exceptions\Security\OAuth2\InvalidGrantException;

class InvalidGrantExceptionTest extends OAuth2ExceptionTest {

    public static function getTestProperties(): array {
        return array_merge(parent::getTestProperties(), ['grant']);
    }

    public function throwDefaultException(): void {
        throw new InvalidGrantException();
    }

    public function throwMessageException(string $message): void {
        throw new InvalidGrantException($message, 'grant_name');
    }

    public function testGetScope(): void {
        try {
            $this->throwMessageException('Test');
        } catch (InvalidGrantException $ex) {
            $this->assertEquals('grant_name', $ex->getGrant());
            $this->assertEquals('grant_name', $ex->grant);
        }
    }

}
