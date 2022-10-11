<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  ContainerExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2018
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Psr\Container;

use Jitesoft\Exceptions\JitesoftException;
use Jitesoft\Exceptions\Psr\Container\NotFoundException;
use Jitesoft\Exceptions\Tests\ExceptionTestCase;

class NotFoundExceptionTest extends ExceptionTestCase {

    /**
     * @throws JitesoftException
     */
    protected function throwDefaultException(): void {
        throw new NotFoundException();
    }

    /**
     * @throws JitesoftException
     */
    protected function throwMessageException(string $message): void {
        throw new NotFoundException($message);
    }
}
