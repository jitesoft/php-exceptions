<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpForbiddenException.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Http\Client;

use Throwable;

/**
 * Class HttpForbiddenException
 *
 * Client http exception thrown when a forbidden resource.
 */
class HttpForbiddenException extends HttpClientException {

    /**
     * HttpForbiddenException constructor.
     * @param string         $message
     * @param integer        $code
     * @param null|Throwable $previous
     */
    public function __construct(string $message = 'Forbidden.',
                                int $code = 403,
                                ?Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }

}
