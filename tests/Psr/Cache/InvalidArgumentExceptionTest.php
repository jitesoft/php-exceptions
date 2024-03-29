<?php
namespace Jitesoft\Exceptions\Tests\Prs\Cache;

use Jitesoft\Exceptions\JitesoftException;
use Jitesoft\Exceptions\Psr\Cache\InvalidArgumentException;
use Jitesoft\Exceptions\Tests\ExceptionTestCase;

class InvalidArgumentExceptionTest extends ExceptionTestCase {
    /**
     * @throws JitesoftException
     */
    protected function throwDefaultException(): void {
        throw new InvalidArgumentException();
    }

    /**
     * @throws JitesoftException
     */
    protected function throwMessageException(string $message): void {
        throw new InvalidArgumentException($message);
    }
}
