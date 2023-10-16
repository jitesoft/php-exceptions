<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpToEarlyException.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Http\Client;

use Throwable;

/**
 * Class HttptoEarlyException
 *
 * Client http exception which is used to indicate that the server is unwilling
 * to risk processing the request that might be replayed.
 *
 * This is an experimental http status code which might change.
 */
class HttpToEarlyException extends HttpClientException {

    /**
     * HttpToEarlyException constructor.
     *
     * @param string         $message
     * @param int            $code
     * @param Throwable|null $previous
     */
    public function __construct(
        string $message = 'To early.',
        int $code = 425,
        ?Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }

}
