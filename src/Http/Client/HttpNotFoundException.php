<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpNotFoundException.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Http\Client;

use Throwable;

/**
 * Class HttpNotFoundException
 *
 * Client http exception thrown when the requested resource was not found.
 */
class HttpNotFoundException extends HttpClientException {

    /**
     * HttpNotFoundException constructor.
     *
     * @param string         $message
     * @param integer        $code
     * @param null|Throwable $previous
     */
    public function __construct(string $message = 'Resource not found.',
                                int $code = 404,
                                ?Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }

}
