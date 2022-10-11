<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  ContainerExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2018
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Psr\Container;

use Jitesoft\Exceptions\JitesoftException;
use Jitesoft\Exceptions\Psr\Container\ContainerException;
use Jitesoft\Exceptions\Tests\ExceptionTestCase;

class ContainerExceptionTest extends ExceptionTestCase {

    /**
     * @throws JitesoftException
     */
    protected function throwDefaultException(): void {
        throw new ContainerException();
    }

    /**
     * @throws JitesoftException
     */
    protected function throwMessageException(string $message): void {
        throw new ContainerException($message);
    }
}
