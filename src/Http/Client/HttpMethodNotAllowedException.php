<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpMethodNotAllowedException.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Http\Client;

use Jitesoft\Exceptions\Http\HttpException;
use Throwable;

/**
 * Class HttpMethodNotAllowedException
 *
 * Client http exception thrown when a request method was not supported for the given resource.
 */
class HttpMethodNotAllowedException extends HttpException {

    /**
     * HttpMethodNotAllowedException constructor.
     *
     * @param string $message
     * @param int $code
     * @param null|Throwable $previous
     */
    public function __construct(string $message = "Method not allowed for requested resource.",
                                int $code = 405,
                                ?Throwable $previous = null) {

        parent::__construct($message, $code, $previous);
    }
}