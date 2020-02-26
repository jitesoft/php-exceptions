<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  InvalidJsonValueException.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Json;

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
    protected ?string $propertyName;

    /**
     * InvalidJsonValueException constructor.
     *
     * @param string         $message
     * @param null|string    $propertyName
     * @param null|string    $json
     * @param null|string    $path         Optional file path.
     * @param null|string    $fileName     Optional file name.
     * @param integer        $code
     * @param null|Throwable $previous
     */
    public function __construct(string $message = 'Invalid JSON value (Property: %s).',
                                ?string $propertyName = null,
                                ?string $json = null,
                                ?string $path = null,
                                ?string $fileName = null,
                                int $code = 0,
                                ?Throwable $previous = null) {
        $this->propertyName = $propertyName;

        parent::__construct(sprintf($message, $propertyName), $json, $path, $fileName, $code, $previous);
    }

    /**
     * @return null|string
     */
    public function getPropertyName() : ?string {
        return $this->propertyName;
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
     *   'json'          => (null|string)
     *   'property_name' => (null|string)
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
