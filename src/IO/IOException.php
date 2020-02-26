<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  IOException.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\IO;

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
     * @param string         $message
     * @param null|string    $path
     * @param integer        $code
     * @param Throwable|null $previous
     */
    public function __construct(string $message = 'Unexpected IO error.',
                                ?string $path = null,
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
     *   'path'  => (null|string)
     * }
     * </pre>
     *
     * @return array
     */
    public function toArray(): array {
        $parent         = parent::toArray();
        $parent['path'] = $this->path;
        return $parent;
    }

}
