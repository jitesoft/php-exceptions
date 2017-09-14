<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  XPathException.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\XmlExceptions;

use Throwable;

/**
 *
 * Exception thrown when a XPath expression fails.
 *
 * Xml exceptions may or may not have a path and filename pointing to the file which is
 * invalid.
 *
 * @property string $xPath
 */
class XPathException extends XmlException {

    /** @var string */
    protected $xPath;

    /**
     * XPathException constructor.
     * @param string $xPath
     * @param string $xml
     * @param null|string $fileName Optional file name.
     * @param null|string $path     Optional file path.
     * @param string $message
     * @param int $code
     * @param null|Throwable $previous
     */
    public function __construct(string $xPath,
                                string $xml,
                                ?string $fileName = null,
                                ?string $path = null,
                                string $message = "Failed to evaluate XPath (%s).",
                                int $code = 0,
                                ?Throwable $previous = null) {

        $this->xPath = $xPath;

        parent::__construct($xml, $fileName, $path, sprintf($message, $xPath), $code, $previous);
    }

    /**
     * @return string
     */
    public function getXPath() : string {
        return $this->xPath;
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
     *   'xml'         => (string)
     *   ´file_path'   => (null|string)
     *   'file_name'   => (null|string)
     *   'xpath'       => (string)
     * }
     * </pre>
     *
     * @return array
     */
    public function toArray() {
        $arr          = parent::toArray();
        $arr['xpath'] = $this->xPath;
        return $arr;
    }

}
