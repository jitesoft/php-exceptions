<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  CacheException.php - Part of the php-exceptions project.

  © - Jitesoft 2018
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Psr\Cache;

use Psr\Cache\CacheException as PsrCacheException;
use Jitesoft\Exceptions\JitesoftException;
use Throwable;

/**
 * Class ContainerException
 *
 * General PSR cache exception implementing the CacheException interface.
 */
class CacheException extends JitesoftException implements PsrCacheException {

    public function __construct(string $message = 'Unexpected cache exception.',
                                int $code = 0,
                                ?Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }

}
