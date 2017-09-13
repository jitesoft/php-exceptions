<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  ParseException.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\IOExceptions;

use Throwable;

/**
 * Class ParseException
 *
 * Exception thrown on failure to parse a given file.
 */
class ParseException extends FileException {

    /**
     * ParseException constructor.
     *
     * @param string $fileName
     * @param string $path
     * @param string $message
     * @param int $code
     * @param null|Throwable $previous
     */
    public function __construct(string $fileName,
                                string $path,
                                string $message = "Failed to parse file %s.",
                                int $code = 0,
                                ?Throwable $previous = null) {

        parent::__construct($fileName, $path, sprintf($message, $fileName), $code, $previous);
    }
}
