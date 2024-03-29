<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  JsonParseExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Json;

use Jitesoft\Exceptions\Json\JsonParseException;

/**
 * @group RuntimeExceptions
 * @group JsonExceptions
 */
class JsonParseExceptionTest extends JsonExceptionTest {

    protected function throwDefaultException(): void {
        throw new JsonParseException();
    }

    public function throwMessageException(string $message): void {
        throw new JsonParseException($message,"invalid", "/a/b/c", "a.json");
    }
}
