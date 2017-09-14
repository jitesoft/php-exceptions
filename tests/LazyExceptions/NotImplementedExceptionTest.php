<?php

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  NotImplementedExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

namespace Jitesoft\Exceptions\Tests\LazyExceptions;

use Jitesoft\Exceptions\LazyExceptions\NotImplementedException;
use Jitesoft\Exceptions\Tests\ExceptionTestCase;

/**
 * @group LazyExceptions
 */
class NotImplementedExceptionTest extends ExceptionTestCase {

    public function throwDefaultMessage() {
        $this->setExpectedMessage("Not yet implemented.");
        throw new NotImplementedException();
    }

    public function throwNoneDefaultMessage() {
        $this->setExpectedMessage("Test");
        throw new NotImplementedException("Test");
    }
}
