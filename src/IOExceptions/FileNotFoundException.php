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
class FileNotFoundException extends IOException {

    /**
     * @param string $fileName
     * @param string $message Can be used as a parametrised string (%s will replace fileName).
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(
        string $fileName,
        string $message = "Failed to open file %s, File not found.",
        int $code = 0,
        ?Throwable $previous = null) {

        parent::__construct($fileName, sprintf($message, $fileName), $code, $previous);
    }


}
