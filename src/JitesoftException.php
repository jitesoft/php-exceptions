<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  JitesoftException.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions;

use Exception;
use JsonSerializable;
use Throwable;

/**
 * Base class for Jitesoft Exception types.
 *
 * @property string $message
 * @property int    $code
 * @property string $file
 * @property int    $line
 */
abstract class JitesoftException extends Exception implements JsonSerializable {

    /**
     * @param string $name
     * @return mixed
     */
    public function __get($name) {
        if (property_exists($this, $name)) {
            return $this->{$name};
        }
        return null;
    }

    /**
     * JitesoftException constructor.
     *
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(string $message = "",
                                int $code = 0,
                                ?Throwable $previous = null) {

        parent::__construct($message, $code, $previous);
    }

    /**
     * Get the exception as an associative array.
     *
     * <pre>
     * {
     *   'type'  => (string)
     *   'error' => (string)
     *   'code'  => (int)
     *   'file'  => (string)
     *   'line'  => (int)
     *   'trace' => (array)
     *   'inner' => (array)
     * }
     * </pre>
     *
     * @return array
     */
    public function toArray() {
        $exception = [
            'type'  => static::class,
            'error' => $this->getMessage(),
            'code'  => $this->getCode(),
            'line'  => $this->getLine(),
            'file'  => $this->getFile(),
            'trace' => $this->getTrace(),
            'inner' => null
        ];

        $prev  = $this->getPrevious();
        $inner = &$exception['inner'];
        while ($prev !== null) {

            if ($prev instanceof JitesoftException) {
                // If inner is a jitesoftexception, we can fetch the inner exception
                // as an array, and due to the fact that there is only one inner exception,
                // it will take care of the nesting in its own toArray method.
                $inner = $prev->toArray();
                break;
            }

            $inner = [
                'type'  => get_class($prev),
                'error' => $prev->getMessage(),
                'code'  => $prev->getCode(),
                'line'  => $prev->getLine(),
                'file'  => $prev->getFile(),
                'trace' => $prev->getTrace(),
                'inner' => ($prev->getPrevious() !== null ? [] : null)
            ];

            $inner = &$inner['inner'];
            $prev  = $prev->getPrevious();
        }

        return $exception;
    }

    /**
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize() {
        return $this->toArray();
    }
}
