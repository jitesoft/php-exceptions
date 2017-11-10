<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpRequestTimeoutException.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Http\Client;

use Jitesoft\Exceptions\Http\HttpException;
use Throwable;

/**
 * Class HttpRequestTimeoutException
 *
 * Client http exception thrown when the server timed out awaiting an expected client requrest.
 */
class HttpRequestTimeoutException extends HttpException {

    /**
     * HttpRequestTimeoutException constructor.
     *
     * @param string $message
     * @param int $code
     * @param null|Throwable $previous
     */
    public function __construct(string $message = "Timed out.",
                                int $code = 408,
                                ?Throwable $previous = null) {

        parent::__construct($message, $code, $previous);
    }

}
