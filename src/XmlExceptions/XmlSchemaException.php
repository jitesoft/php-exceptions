<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  XmlSchemaException.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\XmlExceptions;

use Throwable;

/**
 *
 * General Xml Schema exception.
 * Mainly used as a base class for more specific Xml schema exceptions.
 *
 * Xml exceptions may or may not have a path and filename pointing to the file which is
 * invalid.
 *
 * @property string $schema
 * @property string $schemaName
 * @property string $schemaPath
 */
class XmlSchemaException extends XmlException {

    /** @var string */
    protected $schema;

    /** @var string|null */
    protected $schemaName;

    /** @var string|null */
    protected $schemaPath;

    /**
     * XmlSchemaException constructor.
     *
     * @param string $schema          Schema as string.
     * @param string $xml             Xml as string.
     * @param null|string $schemaName Optional schema file name.
     * @param null|string $schemaPath Optional schema file path.
     * @param null|string $fileName   Optional xml file name.
     * @param null|string $path       Optional xml file path.
     * @param string $message
     * @param int $code
     * @param null|Throwable $previous
     */
    public function __construct(string $message = "Unexpected XML Schema error.",
                                ?string $schema = null,
                                ?string $xml = null,
                                ?string $schemaName = null,
                                ?string $schemaPath = null,
                                ?string $fileName = null,
                                ?string $path = null,
                                int $code = 0,
                                ?Throwable $previous = null) {

        $this->schema     = $schema;
        $this->schemaName = $schemaName;
        $this->schemaPath = $schemaPath;

        parent::__construct($message, $xml, $fileName, $path, $code, $previous);
    }

    /**
     * @return null|string
     */
    public function getSchema() : ?string {
        return $this->schema;
    }

    /**
     * @return null|string
     */
    public function getSchemaName() : ?string {
        return $this->schemaName;
    }

    /**
     * @return null|string
     */
    public function getSchemaPath() : ?string {
        return $this->schemaPath;
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
     *   'schema'      => (null|string)
     *   ´file_path'   => (null|string)
     *   'file_name'   => (null|string)
     *   'schema_path' => (null|string)
     *   'schema_name' => (null|string)
     * }
     * </pre>
     *
     * @return array
     */
    public function toArray() {
        $arr                = parent::toArray();
        $arr['schema']      = $this->schema;
        $arr['schema_path'] = $this->schemaPath;
        $arr['schema_name'] = $this->schemaName;
        return $arr;
    }

}
