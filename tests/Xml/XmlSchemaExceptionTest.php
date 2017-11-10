<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  XmlSchemaExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Xml;

use Jitesoft\Exceptions\JitesoftException;
use Jitesoft\Exceptions\Xml\XmlSchemaException;

/**
 * @group XmlExceptions
 * @group XmlSchemaExceptions
 */
class XmlSchemaExceptionTest extends XmlExceptionTest {

    protected static function getTestProperties() {
        return array_merge(parent::getTestProperties(), [ 'schema', 'schema_path', 'schema_name' ]);
    }

    protected function getDefaultException(): JitesoftException {
        return new XmlSchemaException();
    }

    public function getMessageException(string $message): JitesoftException {
        return new XmlSchemaException($message,"invalid", "invalid", "a.xsd", "/a/b/c/d", "a.xml", "/a/b/c");
    }

    public function testGetSchema() {
        try {
            throw $this->getMessageException("Test");
        } catch (XmlSchemaException $ex) {
            $this->assertEquals("invalid", $ex->schema);
            $this->assertEquals("invalid", $ex->getSchema());
        }
    }

    public function testGetSchemaPath() {
        try {
            throw $this->getMessageException("Test");
        } catch (XmlSchemaException $ex) {
            $this->assertEquals("/a/b/c/d", $ex->schemaPath);
            $this->assertEquals("/a/b/c/d", $ex->getSchemaPath());
        }
    }

    public function testGetSchemaName() {
        try {
            throw $this->getMessageException("Test");
        } catch (XmlSchemaException $ex) {
            $this->assertEquals("a.xsd", $ex->getSchemaName());
            $this->assertEquals("a.xsd", $ex->schemaName);
        }}

}
