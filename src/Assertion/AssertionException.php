<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  AssertionException.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Assertion;

use Jitesoft\Exceptions\JitesoftException;
use Throwable;

/**
 * Class AssertionException
 *
 * Exception thrown due to failed assertion.
 */
class AssertionException extends JitesoftException {

    public function __construct(string $message = "", int $code = 0, ?Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }

}
