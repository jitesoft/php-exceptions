<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  JitesoftException.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions;

use Exception;

/**
 * Base class for Jitesoft Exception types.
 */
abstract class JitesoftException extends Exception {

    /**
     * Get the exception as a json object.
     *
     * <pre>
     * {
     *   'type'  => 'error_type',    (string)
     *   'error' => 'error_message', (string)
     *   'code'  => error_code,      (int)
     *   'file'  => file_name,       (string)
     *   'line'  => file_line,       (int)
     *   'trace' => stack_trace,     (object)
     *   'inner' => inner_exception  (object)
     * }
     * </pre>
     *
     * @return string
     */
    public function toJson() {
        return json_encode($this->toArray());
    }

    /**
     * Get the exception as an associative array.
     *
     * <pre>
     * {
     *   'type'  => 'error_type',    (string)
     *   'error' => 'error_message', (string)
     *   'code'  => error_code,      (int)
     *   'file'  => file_name,       (string)
     *   'line'  => file_line,       (int)
     *   'trace' => stack_trace,     (array)
     *   'inner' => inner_exception  (array)
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
}
