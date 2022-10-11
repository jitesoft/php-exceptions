<?php
namespace Jitesoft\Exceptions\Tests\Prs\Cache;

use Jitesoft\Exceptions\JitesoftException;
use Jitesoft\Exceptions\Psr\Cache\CacheException;
use Jitesoft\Exceptions\Tests\ExceptionTestCase;

class CacheExceptionTest extends ExceptionTestCase {
    /**
     * @throws JitesoftException
     */
    protected function throwDefaultException(): void {
        throw new CacheException();
    }

    /**
     * @throws JitesoftException
     */
    protected function throwMessageException(string $message): void {
        throw new CacheException($message);
    }
}
