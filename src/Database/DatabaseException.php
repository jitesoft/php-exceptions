<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  DatabaseException.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Database;

use Jitesoft\Exceptions\JitesoftException;
use Throwable;

/**
 * Class DatabaseException
 *
 * General database exception.
 * Mainly used as a base class for more specific database exception types.
 */
class DatabaseException extends JitesoftException {

    /**
     * DatabaseException constructor.
     *
     * @param string         $message
     * @param integer        $code
     * @param Throwable|null $previous
     */
    public function __construct($message = 'Unexpected database error.',
                                $code = 0,
                                Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }

}
