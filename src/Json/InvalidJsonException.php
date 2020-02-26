<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  InvalidJsonException.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Json;

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
     * @param string         $message
     * @param null|string    $json
     * @param null|string    $path     Optional file path.
     * @param null|string    $fileName Optional file name.
     * @param integer        $code
     * @param null|Throwable $previous
     */
    public function __construct(string $message = 'Invalid JSON.',
                                ?string $json = null,
                                ?string $path = null,
                                ?string $fileName = null,
                                int $code = 0,
                                ?Throwable $previous = null) {
        parent::__construct($message, $json, $path, $fileName, $code, $previous);
    }

}
