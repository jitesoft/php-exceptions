<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  NullReferenceException.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Logic;

use Jitesoft\Exceptions\JitesoftException;
use Throwable;

/**
 * Class NullReferenceException
 *
 * Thrown when a object was unexpectedly a null value.
 */
class NullReferenceException extends JitesoftException {

    /**
     * NullReferenceException constructor.
     * @param string         $message
     * @param integer        $code
     * @param null|Throwable $previous
     */
    public function __construct(string $message = 'Unexpected null reference.',
                                 int $code = 0,
                                 ?Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }

}
