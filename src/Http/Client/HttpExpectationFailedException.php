<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpExpectationFailedException.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Http\Client;

use Jitesoft\Exceptions\Http\HttpException;
use Throwable;

/**
 * Class HttpExpectationFailedException
 *
 * Client http exception thrown when server could not meet the requirements of the `expect` header.
 */
class HttpExpectationFailedException extends HttpException {

    /**
     * HttpExpectationFailedException constructor.
     *
     * @param string         $message
     * @param integer        $code
     * @param null|Throwable $previous
     */
    public function __construct(string $message = 'Server could not meet the expect header requirements.',
                                int $code = 417,
                                ?Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }

}
