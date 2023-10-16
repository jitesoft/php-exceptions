<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpUnsupportedMediaTypeException.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Http\Client;

use Throwable;

/**
 * Class HttpUnsupportedMediaTypeException
 *
 * Client http exception thrown when the request resource or entity have a media type not accepted by the server.
 */
class HttpUnsupportedMediaTypeException extends HttpClientException {

    /**
     * HttpUnsupportedMediaTypeException constructor.
     *
     * @param string         $message
     * @param integer        $code
     * @param null|Throwable $previous
     */
    public function __construct(string $message = 'Unsupported media type.',
                                int $code = 415,
                                ?Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }

}
