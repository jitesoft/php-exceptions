<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  JsonParseExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Json;

use Jitesoft\Exceptions\JitesoftException;
use Jitesoft\Exceptions\Json\JsonParseException;

/**
 * @group RuntimeExceptions
 * @group JsonExceptions
 */
class JsonParseExceptionTest extends JsonExceptionTest {

    protected function getDefaultException(): JitesoftException {
        return new JsonParseException();
    }

    public function getMessageException(string $message): JitesoftException {
        return new JsonParseException($message,"invalid", "/a/b/c", "a.json");
    }
}
