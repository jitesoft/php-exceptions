<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  FileException.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\IO;

use Jitesoft\Exceptions\Traits\HasFileTrait;
use Throwable;

/**
 * Class FileException
 *
 * General file exception.
 * Mainly used as a base class for more specific file exceptions.
 */
class FileException extends IOException {
    use HasFileTrait;

    /**
     * FileException constructor.
     *
     * @param string $message
     * @param null|string $fileName
     * @param null|string $path
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(string $message = "Unexpected file error.",
                                ?string $fileName = null,
                                ?string $path = null,
                                int $code = 0,
                                Throwable $previous = null) {

        $this->fileName = $fileName;
        parent::__construct($message, $path, $code, $previous);
    }

    /**
     * Get the exception as an associative array.
     *
     * <pre>
     * {
     *   'type'      => (string)
     *   'error'     => (string)
     *   'code'      => (int)
     *   'file'      => (string)
     *   'line'      => (int)
     *   'trace'     => (array)
     *   'inner'     => (array)
     *   'path'      => (string)
     *   'file_name' => (string)
     * }
     * </pre>
     *
     * @return array
     */
    public function toArray() : array {
        $arr              = parent::toArray();
        $arr['file_name'] = $this->fileName;
        return $arr;
    }

}
