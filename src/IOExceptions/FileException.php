<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  FileException.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\IOExceptions;

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
     * @param string $fileName
     * @param string $path
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(string $fileName,
                                string $path,
                                string $message = "Unexpected file error.",
                                int $code = 0,
                                Throwable $previous = null) {

        $this->fileName = $fileName;
        parent::__construct($path, $message, $code, $previous);
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
