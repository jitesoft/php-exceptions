<?php

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  InvalidArgumentException.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

namespace Jitesoft\Exceptions\Logic;

use Jitesoft\Exceptions\JitesoftException;
use Throwable;

/**
 * Class InvalidArgumentException
 *
 * Exception to be thrown when a invalid argument is passed to a method.
 *
 * @property string $argumentName
 * @property string $methodName
 * @property string $className
 */
class InvalidArgumentException extends JitesoftException {
    protected string $argumentName;
    protected string $methodName;
    protected string $className;

    public function __construct(string $message = 'Invalid argument.',
                                 string $argumentName = '',
                                 string $methodName = '',
                                 string $className = '',
                                 int $code = 0,
                                 ?Throwable $previous = null) {
        $this->argumentName = $argumentName;
        $this->methodName   = $methodName;
        $this->className    = $className;

        parent::__construct($message, $code, $previous);
    }

    /**
     * Get the exception as an associative array.
     *
     * <pre>
     * {
     *   'type'         => (string)
     *   'error'        => (string)
     *   'code'         => (int)
     *   'file'         => (string)
     *   'line'         => (int)
     *   'trace'        => (array)
     *   'inner'        => (array)
     *   'argumentName' => (string)
     *   'methodName'   => (string)
     *   'className'    => (string(
     * }
     * </pre>
     *
     * @return array
     */
    public function toArray(): array {
        $arr                 = parent::toArray();
        $arr['argumentName'] = $this->argumentName;
        $arr['methodName']   = $this->methodName;
        $arr['className']    = $this->className;
        return $arr;
    }

    /**
     * @return string
     */
    public function getArgumentName(): string {
        return $this->argumentName;
    }

    /**
     * @return string
     */
    public function getMethodName(): string {
        return $this->methodName;
    }

    /**
     * @return string
     */
    public function getClassName(): string {
        return $this->className;
    }

}
