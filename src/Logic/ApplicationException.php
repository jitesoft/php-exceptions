<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  ApplicationException.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Logic;

use Jitesoft\Exceptions\JitesoftException;
use Throwable;

/**
 * Class ApplicationException
 *
 * General Application exception.
 * Mainly used as a base class for more specific application exceptions.
 */
class ApplicationException extends JitesoftException {

    public function __construct(string $message = 'Unexpected application error.',
                                 int $code = 0,
                                 ?Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }

}
