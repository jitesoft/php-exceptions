<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpInternalServerErrorException.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Http\Server;

use Throwable;

/**
 * Class HttpInternalServerErrorException
 *
 * Server http exception thrown on internal server errors.
 */
class HttpInternalServerErrorException extends HttpServerException {

    /**
     * HttpInternalServerErrorException constructor.
     *
     * @param string         $message
     * @param integer        $code
     * @param null|Throwable $previous
     */
    public function __construct(string $message = 'Internal server error.',
                                int $code = 500,
                                ?Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }

}
