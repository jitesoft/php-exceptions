<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpUnauthorizedException.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Http\Client;

use Throwable;

/**
 * Class HttpUnauthorizedException
 *
 * Client http exception thrown when a resource was requested that the client was not authorized to receive.
 */
class HttpUnauthorizedException extends HttpClientException {

    /**
     * HttpUnauthorizedException constructor.
     *
     * @param string         $message
     * @param integer        $code
     * @param null|Throwable $previous
     */
    public function __construct(string $message = 'Unauthorized access.',
                                int $code = 401,
                                ?Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }

}
