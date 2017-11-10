<?php

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  NotImplementedExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

namespace Jitesoft\Exceptions\Tests\Lazy;

use Jitesoft\Exceptions\JitesoftException;
use Jitesoft\Exceptions\Lazy\NotImplementedException;
use Jitesoft\Exceptions\Tests\ExceptionTestCase;

/**
 * @group LazyExceptions
 */
class NotImplementedExceptionTest extends ExceptionTestCase {

    protected function getDefaultException(): JitesoftException {
        return new NotImplementedException();
    }

    public function getMessageException(string $message): JitesoftException {
        throw new NotImplementedException($message);
    }
}
