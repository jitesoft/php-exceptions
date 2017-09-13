<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  DirectoryException.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\IOExceptions;
use Throwable;

/**
 * Class DirectoryException
 *
 * General directory exception.
 * Mainly used as a base class for more specific directory exceptions.
 */
class DirectoryException extends IOException {

    /**
     * DirectoryException constructor.
     *
     * @param string $path
     * @param string $message
     * @param int $code
     * @param null|Throwable $previous
     */
    public function __construct(string $path,
                                string $message = "Unexpected directory error.",
                                int $code = 0,
                                ?Throwable $previous = null) {

        parent::__construct($path, $message, $code, $previous);
    }

}
