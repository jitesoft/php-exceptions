<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  InvalidJsonExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Json;

use Jitesoft\Exceptions\JitesoftException;
use Jitesoft\Exceptions\Json\InvalidJsonException;

/**
 * @group RuntimeExceptions
 * @group JsonExceptions
 */
class InvalidJsonExceptionTest extends JsonExceptionTest {

    protected function getDefaultException(): JitesoftException {
        return new InvalidJsonException();
    }

    public function getMessageException(string $message): JitesoftException {
        throw new InvalidJsonException($message,"invalid", "/a/b/c", "a.json");
    }
}
