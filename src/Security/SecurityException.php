<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  SecurityException.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Security;

use Jitesoft\Exceptions\JitesoftException;
use Throwable;

/**
 * Class SecurityException
 *
 * General security exception.
 * Mainly used as a base class for more specific security exceptions.
 */
class SecurityException extends JitesoftException {

    /**
     * SecurityException constructor.
     *
     * @param string         $message
     * @param integer        $code
     * @param null|Throwable $previous
     */
    public function __construct(string $message = 'Unexpected security error.',
                                int $code = 0,
                                ?Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }

}
