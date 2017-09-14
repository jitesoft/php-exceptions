<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  FileNotFoundException.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\IOExceptions;

use Throwable;

/**
 * Class FileNotFoundException
 */
class FileNotFoundException extends FileException {

    /**
     * FileNotFoundException constructor.
     *
     * @param string $message
     * @param null|string $fileName
     * @param null|string $path
     * @param int $code
     * @param null|Throwable $previous
     */
    public function __construct(string $message = "Failed to find file %s.",
                                ?string $fileName = null,
                                ?string $path = null,
                                int $code = 0,
                                ?Throwable $previous = null) {

        parent::__construct(sprintf($message, $fileName), $fileName, $path, $code, $previous);
    }

}
