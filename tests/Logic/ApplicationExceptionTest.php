<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  ApplicationExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Logic;

use Jitesoft\Exceptions\Logic\ApplicationException;
use Jitesoft\Exceptions\Tests\ExceptionTestCase;

/**
 * @group LogicExceptions
 * @group ApplicationExceptions
 */
class ApplicationExceptionTest extends ExceptionTestCase {

    protected function throwDefaultException() {
        throw new ApplicationException();
    }

    public function throwMessageException(string $message) {
        throw new ApplicationException($message);
    }

}
