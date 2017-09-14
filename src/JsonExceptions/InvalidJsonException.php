<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  InvalidJsonException.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\JsonExceptions;

use Throwable;

/**
 * Class InvalidJsonException
 *
 * Exception thrown when json is invalid or malformed.
 *
 * A Json exception can have a path and a filename pointing to a json file which is
 * invalid, but it does not have to.
 *
 */
class InvalidJsonException extends JsonException {

    /**
     * InvalidJsonException constructor.
     *
     * @param string $json
     * @param null|string $path     Optional file path.
     * @param null|string $fileName Optional file name.
     * @param string $message
     * @param int $code
     * @param null|Throwable $previous
     */
    public function __construct(string $json,
                                ?string $path = null,
                                ?string $fileName = null,
                                string $message = "Invalid JSON.",
                                int $code = 0,
                                ?Throwable $previous = null) {

        parent::__construct($json, $path, $fileName, $message, $code, $previous);
    }

}
