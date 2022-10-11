<?php

namespace Jitesoft\Exceptions\Security;

use Jitesoft\Exceptions\JitesoftException;
use Throwable;

/**
 * Class AuthorizationException
 *
 * General AuthorizationException.
 */
class AuthorizationException extends JitesoftException {

    /**
     * AuthorizationException constructor.
     *
     * @param string         $message
     * @param int            $code
     * @param Throwable|null $previous
     */
    public function __construct(string $message = 'Authorization failed.',
                                int $code = 0,
                                ?Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }

}
