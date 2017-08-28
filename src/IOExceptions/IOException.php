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
     * @param string|null $fileName
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(?string $fileName, string $message = "", int $code = 0, ?Throwable $previous = null) {
        parent::__construct($message, $code, $previous);

        $this->badFile = $fileName;
    }

    /**
     * Get the name of the file that was accessed faulty.
     *
     * @return string|null
     */
    public function getBadFile() : ?string {
        return $this->badFile;
    }

    public function toArray() {
        $parent             = parent::toArray();
        $parent['bad_file'] = $this->badFile;
        return $parent;
    }

}
