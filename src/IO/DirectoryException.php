<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  DirectoryException.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\IO;

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
     * @param string         $message
     * @param null|string    $path
     * @param integer        $code
     * @param null|Throwable $previous
     */
    public function __construct(string $message = 'Unexpected directory error.',
                                ?string $path = null,
                                int $code = 0,
                                ?Throwable $previous = null) {
        parent::__construct($message, $path, $code, $previous);
    }

}
