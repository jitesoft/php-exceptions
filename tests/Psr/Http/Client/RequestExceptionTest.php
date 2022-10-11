<?php
namespace Jitesoft\Exceptions\Tests\Prs\Http\Client;

use Jitesoft\Exceptions\JitesoftException;
use Jitesoft\Exceptions\Psr\Http\Client\RequestException;
use Jitesoft\Exceptions\Tests\ExceptionTestCase;
use Psr\Http\Message\RequestInterface;

class RequestExceptionTest extends ExceptionTestCase {


    /**
     * @throws JitesoftException
     */
    protected function throwDefaultException(): void {
        $mock = $this->createMock(RequestInterface::class);
        throw new RequestException($mock);
    }

    /**
     * @throws JitesoftException
     */
    protected function throwMessageException(string $message): void {
        $mock = $this->createMock(RequestInterface::class);
        throw new RequestException($mock, $message);
    }
}
