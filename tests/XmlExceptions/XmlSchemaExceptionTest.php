<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  XmlSchemaExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\XmlExceptions;

use Jitesoft\Exceptions\XmlExceptions\XmlSchemaException;

/**
 * @group XmlExceptions
 * @group XmlSchemaExceptions
 */
class XmlSchemaExceptionTest extends XmlExceptionTest {

    protected static function getTestProperties() {
        return array_merge(parent::getTestProperties(), [ 'schema', 'schema_path', 'schema_name' ]);
    }

    public function throwDefaultMessage() {
        $this->setExpectedMessage("Unexpected XML Schema error.");
        throw new XmlSchemaException("invalid", "invalid", "a.xsd", "/a/b/c/d", "a.xml", "/a/b/c");
    }

    public function throwNoneDefaultMessage() {
        $this->setExpectedMessage("Test");
        throw new XmlSchemaException("invalid", "invalid", "a.xsd", "/a/b/c/d", "a.xml", "/a/b/c", "Test");
    }

    public function testGetSchema() {
        try {
            $this->throwDefaultMessage();
        } catch (XmlSchemaException $ex) {
            $this->assertEquals("invalid", $ex->schema);
            $this->assertEquals("invalid", $ex->getSchema());
        }
    }

    public function testGetSchemaPath() {
        try {
            $this->throwDefaultMessage();
        } catch (XmlSchemaException $ex) {
            $this->assertEquals("/a/b/c/d", $ex->schemaPath);
            $this->assertEquals("/a/b/c/d", $ex->getSchemaPath());
        }
    }

    public function testGetSchemaName() {
        try {
            $this->throwDefaultMessage();
        } catch (XmlSchemaException $ex) {
            $this->assertEquals("a.xsd", $ex->getSchemaName());
            $this->assertEquals("a.xsd", $ex->schemaName);
        }}

}
