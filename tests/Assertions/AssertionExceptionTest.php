<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  AssertionExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Assertions;

use Jitesoft\Exceptions\Assertion\AssertionException;
use Jitesoft\Exceptions\Tests\ExceptionTestCase;

class AssertionExceptionTest extends ExceptionTestCase {

    protected function throwDefaultException() {
        throw new AssertionException();
    }

    public function throwMessageException(string $message) {
        throw new AssertionException($message);
    }

}
