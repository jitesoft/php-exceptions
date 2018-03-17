<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  NotFoundException.php - Part of the php-exceptions project.

  © - Jitesoft 2018
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Psr\Container;

use Psr\Container\NotFoundExceptionInterface;
use Throwable;

/**
 * Class NotFoundException
 *
 * Exception thrown when a object is not found in a psr container implementation.
 */
class NotFoundException extends ContainerException implements NotFoundExceptionInterface {

    /**
     * NotFoundException constructor.
     * @param string $message
     * @param int $code
     * @param null|Throwable $previous
     */
    public function __construct(string $message = "Container failed to find requested value.",
                                int $code = 0,
                                ?Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }

}
