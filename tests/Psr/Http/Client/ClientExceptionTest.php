<?php
namespace Jitesoft\Exceptions\Tests\Prs\Http\Client;

use Jitesoft\Exceptions\JitesoftException;
use Jitesoft\Exceptions\Psr\Http\Client\ClientException;
use Jitesoft\Exceptions\Tests\ExceptionTestCase;

class ClientExceptionTest extends ExceptionTestCase {
    /**
     * @throws JitesoftException
     */
    protected function throwDefaultException(): void {
        throw new ClientException();
    }

    /**
     * @throws JitesoftException
     */
    protected function throwMessageException(string $message): void {
        throw new ClientException($message);
    }
}
