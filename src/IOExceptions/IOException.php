<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  IOException.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\IOExceptions;

use Jitesoft\Exceptions\JitesoftException;
use Throwable;

/**
 * Base class for IO exceptions.
 */
abstract class IOException extends JitesoftException {

    /** @var string */
    protected $badFile;

    /**
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     * @param string $fileName
     */
    public function __construct($message = "", $code = 0, Throwable $previous = null, string $fileName) {
        parent::__construct($message, $code, $previous);

        $this->badFile = $fileName;
    }

    /**
     * Get the name of the file that was accessed faulty.
     *
     * @return string
     */
    public function getBadFile() : string {
        return $this->badFile;
    }

}
