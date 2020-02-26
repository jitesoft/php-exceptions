<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpGoneException.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Http\Client;

use Jitesoft\Exceptions\Http\HttpException;
use Throwable;

/**
 * Class HttpGoneException
 *
 * Client http exception thrown when a resource has been removed and will not be available again.
 */
class HttpGoneException extends HttpException {

    /**
     * HttpGoneException constructor.
     *
     * @param string         $message
     * @param integer        $code
     * @param null|Throwable $previous
     */
    public function __construct(string $message = 'Requested resource has been permanently removed.',
                                int $code = 410,
                                ?Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }

}
