<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  XPathException.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Xml;

use Throwable;

/**
 *
 * Exception thrown when a XPath expression fails.
 *
 * Xml exceptions may or may not have a path and filename pointing to the file which is
 * invalid.
 *
 * @property null|string $xPath
 */
class XPathException extends XmlException {
    protected ?string $xPath;

    /**
     * XPathException constructor.
     *
     * @param string         $message
     * @param null|string    $xPath
     * @param null|string    $xml
     * @param null|string    $fileName Optional file name.
     * @param null|string    $path     Optional file path.
     * @param integer        $code
     * @param null|Throwable $previous
     */
    public function __construct(string $message = 'Failed to evaluate XPath (%s).',
                                ?string $xPath = null,
                                ?string $xml = null,
                                ?string $fileName = null,
                                ?string $path = null,
                                int $code = 0,
                                ?Throwable $previous = null) {
        $this->xPath = $xPath;

        parent::__construct(sprintf($message, $xPath), $xml, $fileName, $path, $code, $previous);
    }

    /**
     * @return null|string
     */
    // @codingStandardsIgnoreLine
    public function getXPath() : ?string {
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
     *   'xml'         => (null|string)
     *   ´file_path'   => (null|string)
     *   'file_name'   => (null|string)
     *   'xpath'       => (null|string)
     * }
     * </pre>
     *
     * @return array
     */
    public function toArray(): array {
        $arr          = parent::toArray();
        $arr['xpath'] = $this->xPath;
        return $arr;
    }

}
