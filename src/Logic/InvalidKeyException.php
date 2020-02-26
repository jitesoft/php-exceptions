<?php

namespace Jitesoft\Exceptions\Logic;

use Jitesoft\Exceptions\JitesoftException;
use Throwable;

/**
 * An exception used much as an out-of-bounds exception, while more suitable for a map
 * type of structure.
 *
 * @package Jitesoft\Exceptions\Logic
 */
class InvalidKeyException extends JitesoftException {
    protected ?string $keyName;

    public function __construct(string $message = 'Invalid key.',
                                ?string $keyName = null,
                                int $code = 0,
                                ?Throwable $previous = null) {
        $this->keyName = $keyName;
        parent::__construct($message, $code, $previous);
    }

    /**
     * Get the exception as an associative array.
     *
     * <pre>
     * {
     *   'type'    => (string)
     *   'error'   => (string)
     *   'code'    => (int)
     *   'file'    => (string)
     *   'line'    => (int)
     *   'trace'   => (array)
     *   'inner'   => (array)
     *   'keyName' => (mixed)
     * }
     * </pre>
     *
     * @return array
     */
    public function toArray(): array {
        $arr            = parent::toArray();
        $arr['keyName'] = $this->keyName;
        return $arr;
    }

    /**
     * @return null|string
     */
    public function getKeyName(): ?string {
        return $this->keyName;
    }

}
