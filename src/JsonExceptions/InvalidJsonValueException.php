<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  InvalidJsonValueException.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\JsonExceptions;

use Throwable;

/**
 * Class InvalidJsonValueException
 *
 * Exception thrown when a json value is invalid.
 *
 * A Json exception can have a path and a filename pointing to a json file which is
 * invalid, but it does not have to.
 *
 * @property string $propertyName
 */
class InvalidJsonValueException extends InvalidJsonException {

    /** @var string */
    protected $propertyName;

    /**
     * InvalidJsonValueException constructor.
     *
     * @param string $propertyName
     * @param string $json
     * @param null|string $path Optional file path.
     * @param null|string $fileName Optional file name.
     * @param string $message
     * @param int $code
     * @param null|Throwable $previous
     */
    public function __construct(string $propertyName,
                                string $json,
                                ?string $path = null,
                                ?string $fileName = null,
                                string $message = "Invalid JSON value (Property: %s).",
                                int $code = 0,
                                ?Throwable $previous = null) {

        $this->propertyName = $propertyName;

        parent::__construct($json, $path, $fileName, sprintf($message, $propertyName), $code, $previous);
    }

    /**
     * Get the exception as an associative array.
     *
     * <pre>
     * {
     *   'type'          => (string)
     *   'error'         => (string)
     *   'code'          => (int)
     *   'file'          => (string)
     *   'line'          => (int)
     *   'trace'         => (array)
     *   'inner'         => (array)
     *   'json'          => (string)
     *   'property_name' => (string)
     * }
     * </pre>
     *
     * @return array
     */
    public function toArray(): array {
        $arr                  = parent::toArray();
        $arr['property_name'] = $this->propertyName;
        return $arr;
    }
}
