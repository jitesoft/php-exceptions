<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  DirectoryNotFundException.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\IOExceptions;

use Throwable;

/**
 * Class DirectoryNotFundException
 *
 * Exception thrown when a directory was not found.
 */
class DirectoryNotFundException extends DirectoryException {

    /**
     * DirectoryNotFundException constructor.
     *
     * @param string $path
     * @param string $message
     * @param int $code
     * @param null|Throwable $previous
     */
    public function __construct(string $path,
                                string $message = "Failed to find directory %s.",
                                int $code = 0,
                                ?Throwable $previous = null) {

        parent::__construct($path, sprintf($message, $path), $code, $previous);
    }
}
