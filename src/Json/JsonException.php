<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  JsonException.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Json;

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

    protected ?string $json;

    /**
     * JsonException constructor.
     *
     * @param string         $message
     * @param string|null    $json
     * @param string|null    $path
     * @param string|null    $fileName
     * @param integer        $code
     * @param null|Throwable $previous
     */
    public function __construct(string $message = 'Unexpected json error.',
                                ?string $json = null,
                                ?string $path = null,
                                ?string $fileName = null,
                                int $code = 0,
                                ?Throwable $previous = null) {
        $this->path     = $path;
        $this->fileName = $fileName;
        $this->json     = $json;

        parent::__construct($message, $code, $previous);
    }

    /**
     * @return null|string
     */
    public function getJson() : ?string {
        return $this->json;
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
    public function toArray(): array {
        $arr              = parent::toArray();
        $arr['json']      = $this->json;
        $arr['file_name'] = $this->fileName;
        $arr['file_path'] = $this->path;
        return $arr;
    }

}
