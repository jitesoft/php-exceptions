<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  AuthenticationException.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Security;

use Jitesoft\Exceptions\JitesoftException;
use Throwable;

/**
 * Class AuthenticationException
 *
 * General AuthenticationException.
 * Mainly used as a base class for more specific authentication exception types.
 */
class AuthenticationException extends JitesoftException {

    /**
     * AuthenticationException constructor.
     *
     * @param string $message
     * @param int $code
     * @param null|Throwable $previous
     */
    public function __construct(string $message = "Authentication failed.",
                                int $code = 0,
                                ?Throwable $previous = null) {

        parent::__construct($message, $code, $previous);
    }
}
