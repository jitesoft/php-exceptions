<?php

namespace Jitesoft\Exceptions\Http\Server;

use Jitesoft\Exceptions\Http\HttpException;
use Throwable;

/**
 * Class HttpBadGatewayException
 *
 * Server http exception thrown when the server - working as a gateway - encounters
 * an error in the response from the server.
 */
class HttpBadGatewayException extends HttpException {

    /**
     * HttpBadGatewayException constructor.
     *
     * @param string         $message
     * @param int            $code
     * @param Throwable|null $previous
     */
    public function __construct(
        string $message = "Bad Gateway.",
        int $code = 502,
        ?Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }

}
