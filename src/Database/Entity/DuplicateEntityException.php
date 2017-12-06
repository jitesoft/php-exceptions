<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  DuplicateEntityException.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Database\Entity;

use Throwable;

/**
 * Class DuplicateEntityException
 *
 * Exception thrown when a entity with unique constraint fails to be created due to already existing.
 */
class DuplicateEntityException extends EntityException {

    /**
     * DuplicateEntityException constructor.
     * @param string $message
     * @param null|string $entityName
     * @param null|mixed $entityId
     * @param int $code
     * @param null|Throwable $previous
     */
    public function __construct($message = "Duplicated entity error.",
                                ?string $entityName = null,
                                $entityId = null,
                                int $code = 0,
                                ?Throwable $previous = null) {
        parent::__construct($message, $entityName, $entityId, $code, $previous);
    }
}
