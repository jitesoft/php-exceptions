<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  InvalidJsonExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Json;

use Jitesoft\Exceptions\Json\InvalidJsonException;

/**
 * @group RuntimeExceptions
 * @group JsonExceptions
 */
class InvalidJsonExceptionTest extends JsonExceptionTest {

    protected function throwDefaultException(): void {
        throw new InvalidJsonException();
    }

    public function throwMessageException(string $message): void {
        throw new InvalidJsonException($message,"invalid", "/a/b/c", "a.json");
    }
}
