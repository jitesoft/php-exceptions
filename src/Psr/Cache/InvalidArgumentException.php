<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  InvalidArgumentException.php - Part of the php-exceptions project.

  © - Jitesoft 2018
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Psr\Cache;

use \Psr\Cache\InvalidArgumentException as PsrInvalidArgumentException;
use Throwable;

/**
 * Class ContainerException
 *
 * General PSR invalid argument exception implementing the CacheException.
 */
class InvalidArgumentException extends CacheException implements PsrInvalidArgumentException {

    public function __construct(string $message = 'Failed to fetch cache key. Key not found.', int $code = 0, ?Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }

}
