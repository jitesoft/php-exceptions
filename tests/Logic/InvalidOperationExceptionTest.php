<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  InvalidOperationExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Logic;

use Jitesoft\Exceptions\Logic\InvalidOperationException;
use Jitesoft\Exceptions\Tests\ExceptionTestCase;

/**
 * @group LogicExceptions
 */
class InvalidOperationExceptionTest extends ExceptionTestCase {

    protected function throwDefaultException(): void {
        throw new InvalidOperationException();
    }

    public function throwMessageException(string $message): void {
        throw new InvalidOperationException($message);
    }

}
