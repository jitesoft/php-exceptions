<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  DirectoryNotFundException.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\IO;

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
     * @param string         $message
     * @param null|string    $path
     * @param integer        $code
     * @param null|Throwable $previous
     */
    public function __construct(string $message = 'Failed to find directory %s.',
                                ?string $path = null,
                                int $code = 0,
                                ?Throwable $previous = null) {
        parent::__construct(sprintf($message, $path), $path, $code, $previous);
    }

}
