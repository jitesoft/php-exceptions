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
     * @param string $fileName
     * @param string $path
     * @param string $message Can be used as a parametrised string (%s will replace fileName).
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(
        string $fileName,
        string $path,
        string $message = "Failed to find file %s.",
        int $code = 0,
        ?Throwable $previous = null) {

        parent::__construct($fileName, $path, sprintf($message, $fileName), $code, $previous);
    }

}
