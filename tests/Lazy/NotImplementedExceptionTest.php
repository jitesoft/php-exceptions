<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  NotImplementedExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Lazy;

use Jitesoft\Exceptions\Lazy\NotImplementedException;
use Jitesoft\Exceptions\Tests\ExceptionTestCase;

/**
 * @group LazyExceptions
 */
class NotImplementedExceptionTest extends ExceptionTestCase {

    protected function throwDefaultException() {
        throw new NotImplementedException();
    }

    public function throwMessageException(string $message) {
        throw new NotImplementedException($message);
    }
}
