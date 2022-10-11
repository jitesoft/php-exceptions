<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  IOExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\IO;

use Jitesoft\Exceptions\IO\AccessDeniedException;

/**
 * @group IOExceptions
 * @group RuntimeExceptions
 */
class AccessDeniedExceptionTest extends IOExceptionTest {

    protected function throwDefaultException(): void {
        throw new AccessDeniedException();
    }

    protected function throwMessageException(string $message): void {
        throw new AccessDeniedException($message,"/a/b/c");
    }

}
