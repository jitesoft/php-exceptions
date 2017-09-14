<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  XmlSchemaValidationException.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\XmlExceptions;

use Throwable;

/**
 *
 * Exception thrown when XML does not match its Schema.
 *
 * Xml exceptions may or may not have a path and filename pointing to the file which is
 * invalid.
 */
class XmlSchemaValidationException extends XmlSchemaException {

    /**
     * XmlSchemaValidationException constructor.
     *
     * @param string $schema
     * @param string $xml
     * @param null|string $schemaName
     * @param null|string $schemaPath
     * @param null|string $fileName
     * @param null|string $path
     * @param string $message
     * @param int $code
     * @param null|Throwable $previous
     */
    public function __construct(string $schema,
                                string $xml,
                                ?string $schemaName,
                                ?string $schemaPath,
                                ?string $fileName = null,
                                ?string $path = null,
                                string $message = "Xml did not match schema.",
                                int $code = 0,
                                ?Throwable $previous = null) {

        parent::__construct($schema, $xml, $schemaName, $schemaPath, $fileName, $path, $message, $code, $previous);
    }

}
