<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  JsonParseException.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\JsonExceptions;

use Throwable;

/**
 * Class JsonParseException
 *
 * Exception thrown when a JSON string or file failed to parse.
 *
 * A Json exception can have a path and a filename pointing to a json file which is
 * invalid, but it does not have to.
 *
 */
class JsonParseException extends JsonException {

    /**
     * JsonException constructor.
     *
     * @param string $json
     * @param string|null $path
     * @param string|null $fileName
     * @param string $message
     * @param int $code
     * @param null|Throwable $previous
     */
    public function __construct(string $json,
                                ?string $path = null,
                                ?string $fileName = null,
                                string $message = "Failed to parse JSON.",
                                int $code = 0,
                                ?Throwable $previous = null) {

        parent::__construct($json, $path, $fileName, $message, $code, $previous);
    }

}
