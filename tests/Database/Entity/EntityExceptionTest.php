<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  DatabaseExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Database\Entity;

use Jitesoft\Exceptions\Database\Entity\EntityException;
use Jitesoft\Exceptions\JitesoftException;
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

    protected function getDefaultException() : JitesoftException {
        return new EntityException();
    }

    public function getMessageException(string $message) : JitesoftException {
        throw new EntityException($message, "TestEntity", 123);
    }

    public function testGetEntityId() {
        try {
            $this->getMessageException('test');
        } catch (EntityException $ex) {
            $this->assertEquals(123, $ex->getEntityId());
            $this->assertEquals(123, $ex->entityId);
        }
    }

    public function testGetEntityName() {
        try {
            $this->getMessageException('test');
        } catch (EntityException $ex) {
            $this->assertEquals("TestEntity", $ex->getEntityName());
            $this->assertEquals("TestEntity", $ex->entityName);
        }
    }

}
