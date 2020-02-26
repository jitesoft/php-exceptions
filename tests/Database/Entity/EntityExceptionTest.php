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

    protected static function getTestProperties() {
        return array_merge(parent::getTestProperties(), ['entity_id', 'entity_name']);
    }

    protected function throwDefaultException() {
        throw new EntityException();
    }

    public function throwMessageException(string $message) {
        throw new EntityException($message, "TestEntity", 123);
    }

    public function testGetEntityId() {
        try {
            $this->throwMessageException('test');
        } catch (EntityException $ex) {
            $this->assertEquals(123, $ex->getEntityId());
            $this->assertEquals(123, $ex->entityId);
        }
    }

    public function testGetEntityName() {
        try {
            $this->throwMessageException('test');
        } catch (EntityException $ex) {
            $this->assertEquals("TestEntity", $ex->getEntityName());
            $this->assertEquals("TestEntity", $ex->entityName);
        }
    }

}
