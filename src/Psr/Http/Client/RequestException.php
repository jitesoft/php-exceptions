<?php
/**
 * Created by IntelliJ IDEA.
 * User: Johannes Tegnér
 * Date: 15/12/2018
 * Time: 19:50
 */

namespace Jitesoft\Exceptions\Psr\Http\Client;

use Psr\Http\Client\RequestExceptionInterface;
use Psr\Http\Message\RequestInterface;
use Throwable;

class RequestException extends ClientException implements RequestExceptionInterface {
    protected RequestInterface $request;

    public function __construct(RequestInterface $request,
                                string $message = 'Unexpected HttpClientRequest exception.',
                                int $code = 0,
                                ?Throwable $previous = null) {
        parent::__construct($message, $code, $previous);

        $this->request = $request;
    }

    /**
     * Returns the request.
     *
     * The request object MAY be a different object from the one passed to ClientInterface::sendRequest()
     *
     * @return RequestInterface
     */
    public function getRequest(): RequestInterface {
        return $this->request;
    }

}
