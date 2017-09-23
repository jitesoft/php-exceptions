<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpForbiddenException.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\HttpExceptions\ClientExceptions;

use Jitesoft\Exceptions\HttpExceptions\HttpException;
use Throwable;

/**
 * Class HttpForbiddenException
 *
 * Client http exception thrown when a forbidden resource.
 */
class HttpForbiddenException extends HttpException {

    /**
     * HttpForbiddenException constructor.
     * @param string $message
     * @param int $code
     * @param null|Throwable $previous
     */
    public function __construct(string $message = "Forbidden.",
                                int $code = 403,
                                ?Throwable $previous = null) {

        parent::__construct($message, $code, $previous);
    }

}
