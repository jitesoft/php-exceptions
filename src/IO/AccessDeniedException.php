<?php

namespace Jitesoft\Exceptions\IO;

use Throwable;

/**
 * Class AccessDeniedException
 *
 * Exception thrown when access to a file or directory is denied.
 * Usually due to permission errors.
 */
class AccessDeniedException extends IOException {

    public function __construct(string $message = 'Access denied.',
                                ?string $path = null,
                                int $code = 0,
                                ?Throwable $previous = null) {
        parent::__construct($message, $path, $code, $previous);
    }

}
