<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  EntityException.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Database\Entity;

use Jitesoft\Exceptions\Database\DatabaseException;
use Throwable;

/**
 * Class EntityException
 *
 * General database entity exception.
 * Mainly used as a base class for more specific entity exception types.
 */
class EntityException extends DatabaseException {

    /** @var mixed */
    protected $entityId;
    /** @var ?String */
    protected $entityName;

    /**
     * EntityException constructor.
     * @param string $message
     * @param null|String $entityName
     * @param mixed $entityId
     * @param int $code
     * @param null|Throwable $previous
     */
    public function __construct($message = "Unexpected entity error.",
        ?String $entityName = null,
        $entityId = null,
        $code = 0,
        ?Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);

        $this->entityName = $entityName;
        $this->entityId   = $entityId;
    }

    /**
     * @return mixed|null
     */
    public function getEntityId() {
        return $this->entityId;
    }

    /**
     * @return null|String
     */
    public function getEntityName(): ?string {
        return $this->entityName;
    }

    /**
     * Get the exception as an associative array.
     *
     * <pre>
     * {
     *   'type'        => (string)
     *   'error'       => (string)
     *   'code'        => (int)
     *   'file'        => (string)
     *   'line'        => (int)
     *   'trace'       => (array)
     *   'inner'       => (array)
     *   'path'        => (string)
     *   'entity_name' => (string)
     *   'entity_id'   => (any)
     * }
     * </pre>
     *
     * @return array
     */
    public function toArray() : array {
        $arr                = parent::toArray();
        $arr['entity_name'] = $this->entityName;
        $arr['entity_id']   = $this->entityId;
        return $arr;
    }
}
