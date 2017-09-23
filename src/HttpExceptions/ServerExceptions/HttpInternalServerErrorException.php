<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpInternalServerErrorException.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\HttpExceptions\ServerExceptions;

use Jitesoft\Exceptions\HttpExceptions\HttpException;
use Throwable;

/**
 * Class HttpInternalServerErrorException
 *
 * Server http exception thrown on internal server errors.
 */
class HttpInternalServerErrorException extends HttpException {

    /**
     * HttpInternalServerErrorException constructor.
     *
     * @param string $message
     * @param int $code
     * @param null|Throwable $previous
     */
    public function __construct(string $message = "Internal server error.",
                                int $code = 500,
                                ?Throwable $previous = null) {

        parent::__construct($message, $code, $previous);
    }

}
