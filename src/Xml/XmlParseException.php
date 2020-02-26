<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  XmlParseException.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Xml;

use Throwable;

/**
 * Class XmlParseException
 *
 * Exception to throw when xml fails to parse.
 *
 * Xml exceptions may or may not have a path and filename pointing to the file which is
 * invalid.
 */
class XmlParseException extends XmlException {

    /**
     * XmlParseException constructor.
     * @param string         $xml
     * @param null|string    $fileName Optional filename
     * @param null|string    $path     Optional filepath
     * @param string         $message
     * @param integer        $code
     * @param null|Throwable $previous
     */
    public function __construct(string $message = 'Failed to parse XML.',
                                ?string $xml = null,
                                ?string $fileName = null,
                                ?string $path = null,
                                int $code = 0,
                                ?Throwable $previous = null) {
        parent::__construct($message, $xml, $fileName, $path, $code, $previous);
    }

}
