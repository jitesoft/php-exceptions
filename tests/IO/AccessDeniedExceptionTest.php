<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  IOExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\IO;

use Jitesoft\Exceptions\IO\AccessDeniedException;

/**
 * @group IOExceptions
 * @group RuntimeExceptions
 */
class AccessDeniedExceptionTest extends IOExceptionTest {

    protected function throwDefaultException() {
        throw new AccessDeniedException();
    }

    protected function throwMessageException(string $message) {
        throw new AccessDeniedException($message,"/a/b/c");
    }

}
