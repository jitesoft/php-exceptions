<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  XmlParseException.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\XmlExceptions;

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
     * @param string $xml
     * @param null|string $fileName Optional filename
     * @param null|string $path Optional filepath
     * @param string $message
     * @param int $code
     * @param null|Throwable $previous
     */
    public function __construct(string $xml,
                                ?string $fileName = null,
                                ?string $path = null,
                                string $message = "Failed to parse XML.",
                                int $code = 0,
                                ?Throwable $previous = null) {

        parent::__construct($xml, $fileName, $path, $message, $code, $previous);
    }

}
