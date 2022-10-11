<?php
namespace Jitesoft\Exceptions\Tests\Prs\Http\Client;

use Jitesoft\Exceptions\JitesoftException;
use Jitesoft\Exceptions\Psr\Http\Client\NetworkException;
use Jitesoft\Exceptions\Tests\ExceptionTestCase;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\StreamInterface;
use Psr\Http\Message\UriInterface;

class NetworkExceptionTest extends ExceptionTestCase {


    /**
     * @throws JitesoftException
     */
    protected function throwDefaultException(): void {
        throw new NetworkException(new class implements RequestInterface{
            public function getProtocolVersion() { }
            public function withProtocolVersion($version) { }
            public function getHeaders() {}
            public function hasHeader($name) {}
            public function getHeader($name) {}
            public function getHeaderLine($name) {}
            public function withHeader($name, $value) {}
            public function withAddedHeader($name, $value) {}
            public function withoutHeader($name) {}
            public function getBody() {}
            public function withBody(StreamInterface $body) {}
            public function getRequestTarget() {}
            public function withRequestTarget($requestTarget) {}
            public function getMethod() {}
            public function withMethod($method) {}
            public function getUri() {}
            public function withUri(UriInterface $uri, $preserveHost = false) {}
        });
    }

    /**
     * @throws JitesoftException
     */
    protected function throwMessageException(string $message): void {

        $mock = $this->createMock(RequestInterface::class);

        throw new NetworkException($mock, $message);
    }
}
