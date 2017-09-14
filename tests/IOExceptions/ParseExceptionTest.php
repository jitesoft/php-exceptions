<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  ParseExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\IOExceptions;

use Jitesoft\Exceptions\IOExceptions\ParseException;
use Jitesoft\Exceptions\JitesoftException;

/**
 * @group IOExceptions
 * @group FileExceptions
 * @group RuntimeExceptions
 */
class ParseExceptionTest extends FileExceptionTest {

    protected function getDefaultException(): JitesoftException {
        return new ParseException();
    }

    public function getMessageException(string $message): JitesoftException {
        throw new ParseException($message,"a.txt", "/a/b/c");
    }
    
}
