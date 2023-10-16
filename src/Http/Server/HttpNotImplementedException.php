<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpNotImplementedException.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Http\Server;

use Throwable;

/**
 * Class HttpNotImplementedException
 *
 * Server http exception thrown when a requested method or route has not yet been implemented.
 * This exception should be used when the request will be implemented later.
 */
class HttpNotImplementedException extends HttpServerException {

    /**
     * HttpNotImplementedException constructor.
     *
     * @param string         $message
     * @param integer        $code
     * @param null|Throwable $previous
     */
    public function __construct(string $message = 'Not yet implemented.',
                                int $code = 501,
                                ?Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }

}
