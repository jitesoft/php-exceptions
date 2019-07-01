<?php

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpConflictException.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

namespace Jitesoft\Exceptions\Http\Client;

use Jitesoft\Exceptions\Http\HttpException;
use Throwable;

/**
 * Class HttpConflictException
 *
 * Client http exception thrown on http conflict errors.
 */
class HttpConflictException extends HttpException {

    /**
     * HttpConflictException constructor.
     *
     * @param string         $message
     * @param integer        $code
     * @param Throwable|null $previous
     */
    public function __construct(string $message = 'Request could not be processed due to an unexpected conflict.',
                                int $code = 409,
                                ?Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }

}
