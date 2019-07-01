<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpBadRequestException.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Http\Client;

use Jitesoft\Exceptions\Http\HttpException;
use Throwable;

/**
 * Class HttpBadRequestException
 *
 * Client http exception thrown for bad request errors.
 */
class HttpBadRequestException extends HttpException {

    /**
     * HttpBadRequestException constructor.
     *
     * @param string         $message
     * @param integer        $code
     * @param null|Throwable $previous
     */
    public function __construct(string $message = 'Bad request.',
                                int $code = 400,
                                ?Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }

}
