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
            public function getProtocolVersion(): string { }
            public function withProtocolVersion($version): \Psr\Http\Message\MessageInterface { }
            public function getHeaders(): array {}
            public function hasHeader($name): bool {}
            public function getHeader($name): array {}
            public function getHeaderLine($name): string {}
            public function withHeader($name, $value): \Psr\Http\Message\MessageInterface {}
            public function withAddedHeader($name, $value): \Psr\Http\Message\MessageInterface {}
            public function withoutHeader($name): \Psr\Http\Message\MessageInterface {}
            public function getBody(): StreamInterface {}
            public function withBody(StreamInterface $body): \Psr\Http\Message\MessageInterface {}
            public function getRequestTarget(): string {}
            public function withRequestTarget($requestTarget): RequestInterface {}
            public function getMethod(): string {}
            public function withMethod($method): RequestInterface {}
            public function getUri(): UriInterface {}
            public function withUri(UriInterface $uri, $preserveHost = false): RequestInterface {}
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
