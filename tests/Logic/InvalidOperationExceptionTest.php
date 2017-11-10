<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  InvalidOperationExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Logic;

use Jitesoft\Exceptions\JitesoftException;
use Jitesoft\Exceptions\Logic\InvalidOperationException;
use Jitesoft\Exceptions\Tests\ExceptionTestCase;

/**
 * @group LogicExceptions
 */
class InvalidOperationExceptionTest extends ExceptionTestCase {

    protected function getDefaultException(): JitesoftException {
        return new InvalidOperationException();
    }

    public function getMessageException(string $message): JitesoftException {
        throw new InvalidOperationException($message);
    }

}
