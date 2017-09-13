<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  IOException.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\IOExceptions;

use Jitesoft\Exceptions\JitesoftException;
use Jitesoft\Exceptions\Traits\HasDirectoryTrait;
use Throwable;

/**
 * Class IOException
 *
 * General IOException.
 * Mainly used as a base class for more specific IOException types.
 *
 */
class IOException extends JitesoftException {
    use HasDirectoryTrait;

    /**
     * @param string $path
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(string $path,
                                string $message = "Unexpected IO error.",
                                int $code = 0,
                                ?Throwable $previous = null) {
        parent::__construct($message, $code, $previous);

        $this->path = $path;
    }

    /**
     * Get the exception as an associative array.
     *
     * <pre>
     * {
     *   'type'  => (string)
     *   'error' => (string)
     *   'code'  => (int)
     *   'file'  => (string)
     *   'line'  => (int)
     *   'trace' => (array)
     *   'inner' => (array)
     *   'path'  => (string)
     * }
     * </pre>
     *
     * @return array
     */
    public function toArray() {
        $parent         = parent::toArray();
        $parent['path'] = $this->path;
        return $parent;
    }

}
