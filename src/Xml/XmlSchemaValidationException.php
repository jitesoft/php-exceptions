<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  XmlSchemaValidationException.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Xml;

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
     * @param string         $message
     * @param null|string    $schema
     * @param null|string    $xml
     * @param null|string    $schemaName
     * @param null|string    $schemaPath
     * @param null|string    $fileName
     * @param null|string    $path
     * @param integer        $code
     * @param null|Throwable $previous
     */
    public function __construct(string $message = 'Xml did not match schema.',
                                ?string $schema = null,
                                ?string $xml = null,
                                ?string $schemaName = null,
                                ?string $schemaPath = null,
                                ?string $fileName = null,
                                ?string $path = null,
                                int $code = 0,
                                ?Throwable $previous = null) {
        parent::__construct(
            $message,
            $schema,
            $xml,
            $schemaName,
            $schemaPath,
            $fileName,
            $path,
            $code,
            $previous
        );
    }

}
