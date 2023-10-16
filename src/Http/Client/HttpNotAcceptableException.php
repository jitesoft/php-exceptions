<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpNotAcceptableException.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Http\Client;

use Throwable;

/**
 * Class HttpNotAcceptableException
 *
 * Client http exception thrown when the content requested could not be sent due to the client accept header.
 */
class HttpNotAcceptableException extends HttpClientException {

    /**
     * HttpNotAcceptableException constructor.
     *
     * @param string         $message
     * @param integer        $code
     * @param null|Throwable $previous
     */
    public function __construct(string $message = 'Content did not match accept header.',
                                int $code = 406,
                                ?Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }

}
