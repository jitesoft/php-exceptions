<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpImATeapotException.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Http\Client;

use Jitesoft\Exceptions\Http\HttpException;
use Jitesoft\Exceptions\Http\Server\HttpNotImplementedException;
use Throwable;

/**
 * Class HttpImATeapotException
 *
 * Client http exception which is thrown when server is a coffee brewer hence can't make tea.
 *
 * This is a standardized joke, the http error is sometimes used to indicate that something is not
 * fully implemented (in which case @see HttpNotImplementedException would be preferable.
 */
class HttpImATeapotException extends HttpException {

    /**
     * HttpImATeapotException constructor.
     *
     * @param string         $message
     * @param int            $code
     * @param Throwable|null $previous
     */
    public function __construct(
        string $message = "I'm a teapot.",
        int $code = 418,
        ?Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }

}
