<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  OAuth2Exception.php - Part of the php-exceptions project.

  © - Jitesoft 2018
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Security\OAuth2;

use Jitesoft\Exceptions\Security\SecurityException;
use Throwable;

/**
 * Class AuthenticationException
 *
 * General OAuth2 exception.
 * Mainly used as a base class for more specific oauth2 exception types.
 */
class OAuth2Exception extends SecurityException {

    /**
     * OAuth2Exception constructor.
     * @param string         $message
     * @param integer        $code
     * @param Throwable|null $previous
     */
    public function __construct(string $message = 'Unexpected oauth2 error.',
                                 int $code = 0,
                                 Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }

}
