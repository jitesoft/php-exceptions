<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  UniqueConstraintException.php - Part of the php-exceptions project.

  © - Jitesoft 2018
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Database\Entity;

use Throwable;

/**
 * Class UniqueConstraintException
 *
 * Exception thrown when a entity with a unique constraint fails to be created due to already existing.
 */
class UniqueConstraintException extends EntityException {

    /**
     * UniqueConstraintException constructor.
     * @param string         $message
     * @param null|string    $entityName
     * @param null           $entityId
     * @param integer        $code
     * @param Throwable|null $previous
     */
    public function __construct($message = 'Entity already exist.',
                                 ?string $entityName = null,
                                 $entityId = null,
                                 int $code = 0,
                                 Throwable $previous = null) {
        parent::__construct($message, $entityName, $entityId, $code, $previous);
    }

}
