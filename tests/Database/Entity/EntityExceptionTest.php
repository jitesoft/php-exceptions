<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  DatabaseExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Database\Entity;

use Jitesoft\Exceptions\Database\Entity\EntityException;
use Jitesoft\Exceptions\Tests\ExceptionTestCase;

/**
 * @group Exceptions
 * @group DatabaseExceptions
 * @group RuntimeExceptions
 */
class EntityExceptionTest extends ExceptionTestCase {

    protected static function getTestProperties(): array {
        return array_merge(parent::getTestProperties(), ['entity_id', 'entity_name']);
    }

    protected function throwDefaultException(): void {
        throw new EntityException();
    }

    public function throwMessageException(string $message): void {
        throw new EntityException($message, "TestEntity", 123);
    }

    public function testGetEntityId(): void {
        try {
            $this->throwMessageException('test');
        } catch (EntityException $ex) {
            self::assertEquals(123, $ex->getEntityId());
            self::assertEquals(123, $ex->entityId);
        }
    }

    public function testGetEntityName(): void {
        try {
            $this->throwMessageException('test');
        } catch (EntityException $ex) {
            self::assertEquals("TestEntity", $ex->getEntityName());
            self::assertEquals("TestEntity", $ex->entityName);
        }
    }

}
