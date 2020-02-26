<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpException.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Http;

use Jitesoft\Exceptions\JitesoftException;
use Throwable;

/**
 * Class HttpException
 *
 * General HTTP exception.
 * Mainly used as a base class for more specific HTTP exception types.
 */
class HttpException extends JitesoftException {

    /**
     * HttpException constructor.
     *
     * @param string         $message
     * @param integer        $code
     * @param null|Throwable $previous
     */
    public function __construct(string $message = 'Unexpected HTTP exception.',
                                int $code = 0,
                                ?Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }

}
