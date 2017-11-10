<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  ValidationException.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Validation;

use Jitesoft\Exceptions\JitesoftException;
use Throwable;

/**
 * Class ValidationException
 *
 * General validation exception.
 * Mainly used as a base class for more specific validation exception types.
 */
class ValidationException extends JitesoftException {

    /**
     * ValidationException constructor.
     *
     * @param string $message
     * @param int $code
     * @param null|Throwable $previous
     */
    public function __construct(string $message = "Validation failed.",
                                int $code = 0,
                                ?Throwable $previous = null) {

        parent::__construct($message, $code, $previous);
    }

}
