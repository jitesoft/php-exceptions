<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  JsonParseException.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Json;

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
     * @param string         $message
     * @param string|null    $json
     * @param string|null    $path
     * @param string|null    $fileName
     * @param integer        $code
     * @param null|Throwable $previous
     */
    public function __construct(string $message = 'Failed to parse JSON.',
                                ?string $json = null,
                                ?string $path = null,
                                ?string $fileName = null,
                                int $code = 0,
                                ?Throwable $previous = null) {
        parent::__construct($message, $json, $path, $fileName, $code, $previous);
    }

}
