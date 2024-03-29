<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  ParseExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\IO;

use Jitesoft\Exceptions\IO\ParseException;

/**
 * @group IOExceptions
 * @group FileExceptions
 * @group RuntimeExceptions
 */
class ParseExceptionTest extends FileExceptionTest {

    protected function throwDefaultException(): void {
        throw new ParseException();
    }

    public function throwMessageException(string $message): void {
        throw new ParseException($message,"a.txt", "/a/b/c");
    }

}
