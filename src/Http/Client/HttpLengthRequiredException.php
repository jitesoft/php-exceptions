<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpLengthRequiredException.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Http\Client;

use Throwable;

/**
 * Class HttpLengthRequiredException
 *
 * Client http exception thrown when a content length was not supplied by the client but required by the server.
 */
class HttpLengthRequiredException extends HttpClientException {

    /**
     * HttpLengthRequiredException constructor.
     *
     * @param string         $message
     * @param integer        $code
     * @param null|Throwable $previous
     */
    public function __construct($message = 'Content length required.',
                                int $code = 411,
                                ?Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }

}
