<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  NotImplementedException.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\LazyExceptions;

use Jitesoft\Exceptions\JitesoftException;
use Throwable;

/**
 * Exception to be thrown when a method is not yet implemented.
 *
 */
class NotImplementedException extends JitesoftException {

    /**
     * NotImplementedException constructor.
     *
     * @param string $message
     * @param int $code
     * @param null|Throwable $previous
     */
    public function __construct(
        string $message = "Not yet implemented.",
        int $code = 0,
        ?Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}
