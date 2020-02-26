<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  XmlException.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Xml;

use Jitesoft\Exceptions\JitesoftException;
use Jitesoft\Exceptions\Traits\HasDirectoryTrait;
use Jitesoft\Exceptions\Traits\HasFileTrait;
use Throwable;

/**
 * Class XmlException
 *
 * General XML exception.
 * Mainly used as a base class for more specific xml exception types.
 *
 * Xml exceptions may or may not have a path and filename pointing to the file which is
 * invalid.
 *
 * @property string $xml
 */
class XmlException extends JitesoftException {
    use HasDirectoryTrait;
    use HasFileTrait;

    protected ?string $xml;

    /**
     * XmlException constructor.
     *
     * @param string         $message
     * @param string         $xml
     * @param string|null    $fileName
     * @param string|null    $path
     * @param integer        $code
     * @param Throwable|null $previous
     */
    public function __construct($message = 'Unexpected XML error.',
                                ?string $xml = null,
                                ?string $fileName = null,
                                ?string $path = null,
                                $code = 0,
                                ?Throwable $previous = null) {
        $this->fileName = $fileName;
        $this->path     = $path;
        $this->xml      = $xml;

        parent::__construct($message, $code, $previous);
    }

    /**
     * @return null|string
     */
    public function getXml() : ?string {
        return $this->xml;
    }

    /**
     * Get the exception as an associative array.
     *
     * <pre>
     * {
     *   'type'        => (string)
     *   'error'       => (string)
     *   'code'        => (int)
     *   'file'        => (string)
     *   'line'        => (int)
     *   'trace'       => (array)
     *   'inner'       => (array)
     *   'xml'         => (null|string)
     *   ´file_path'   => (null|string)
     *   'file_name'   => (null|string)
     * }
     * </pre>
     *
     * @return array
     */
    public function toArray(): array {
        $arr              = parent::toArray();
        $arr['xml']       = $this->xml;
        $arr['file_path'] = $this->path;
        $arr['file_name'] = $this->fileName;
        return $arr;
    }

}
