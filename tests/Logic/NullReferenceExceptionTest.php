<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  NullReferenceExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Logic;

use Jitesoft\Exceptions\Logic\InvalidOperationException;
use Jitesoft\Exceptions\Logic\NullReferenceException;
use Jitesoft\Exceptions\Tests\ExceptionTestCase;

/**
 * @group LogicExceptions
 */
class NullReferenceExceptionTest extends ExceptionTestCase {

    protected function throwDefaultException() {
        throw new NullReferenceException();
    }

    public function throwMessageException(string $message) {
        throw new NullReferenceException($message);
    }

}
