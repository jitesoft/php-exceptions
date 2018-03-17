<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  ContainerException.php - Part of the php-exceptions project.

  © - Jitesoft 2018
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Psr\Container;

use Jitesoft\Exceptions\JitesoftException;
use Psr\Container\ContainerExceptionInterface;
use Throwable;

/**
 * Class ContainerException
 *
 * General PSR container exception implementing the ContainerExceptionInterface.
 */
class ContainerException extends JitesoftException implements ContainerExceptionInterface {

    public function __construct(string $message = "Unexpected container exception.",
                                int $code = 0,
                                ?Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }

}
