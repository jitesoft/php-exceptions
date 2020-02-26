<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  ParseException.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\IO;

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
     * @param string         $message
     * @param null|string    $fileName
     * @param null|string    $path
     * @param integer        $code
     * @param null|Throwable $previous
     */
    public function __construct(string $message = 'Failed to parse file %s.',
                                ?string $fileName = null,
                                ?string $path = null,
                                int $code = 0,
                                ?Throwable $previous = null) {
        parent::__construct(sprintf($message, $fileName), $fileName, $path, $code, $previous);
    }

}
