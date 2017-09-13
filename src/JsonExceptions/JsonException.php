<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  JsonException.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\JsonExceptions;

use Jitesoft\Exceptions\JitesoftException;
use Jitesoft\Exceptions\Traits\HasDirectoryTrait;
use Jitesoft\Exceptions\Traits\HasFileTrait;
use Throwable;

/**
 * Class JsonException
 *
 * General json exception.
 * Mainly used as a base class for more specific json exceptions.
 *
 * A Json exception can have a path and a filename pointing to a json file which is
 * invalid, but it does not have to.
 *
 * @property string $json
 */
class JsonException extends JitesoftException {
    use HasDirectoryTrait;
    use HasFileTrait;

    /** @var string */
    protected $json;

    /**
     * JsonException constructor.
     *
     * @param string $json
     * @param string|null $path
     * @param string|null $fileName
     * @param string $message
     * @param int $code
     * @param null|Throwable $previous
     */
    public function __construct(string $json,
                                string $path = null,
                                string $fileName = null,
                                string $message = "",
                                int $code = 0,
                                ?Throwable $previous = null) {

        $this->path     = $path;
        $this->fileName = $fileName;
        $this->json     = $json;

        parent::__construct($message, $code, $previous);
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
     *   'json'  => (string)
     * }
     * </pre>
     *
     * @return array
     */
    public function toArray() {
        $arr         = parent::toArray();
        $arr['json'] = $this->json;
        return $arr;
    }

}
