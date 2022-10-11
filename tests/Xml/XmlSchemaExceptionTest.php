<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  XmlSchemaExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Xml;

use Jitesoft\Exceptions\Xml\XmlSchemaException;

/**
 * @group XmlExceptions
 * @group XmlSchemaExceptions
 */
class XmlSchemaExceptionTest extends XmlExceptionTest {

    protected static function getTestProperties(): array {
        return array_merge(parent::getTestProperties(), [ 'schema', 'schema_path', 'schema_name' ]);
    }

    protected function throwDefaultException(): void {
        throw new XmlSchemaException();
    }

    public function throwMessageException(string $message): void {
        throw new XmlSchemaException($message,"invalid", "invalid", "a.xsd", "/a/b/c/d", "a.xml", "/a/b/c");
    }

    public function testGetSchema() {
        try {
            $this->throwMessageException("Test");
        } catch (XmlSchemaException $ex) {
            self::assertEquals("invalid", $ex->schema);
            self::assertEquals("invalid", $ex->getSchema());
        }
    }

    public function testGetSchemaPath() {
        try {
            $this->throwMessageException("Test");
        } catch (XmlSchemaException $ex) {
            self::assertEquals("/a/b/c/d", $ex->schemaPath);
            self::assertEquals("/a/b/c/d", $ex->getSchemaPath());
        }
    }

    public function testGetSchemaName() {
        try {
            $this->throwMessageException("Test");
        } catch (XmlSchemaException $ex) {
            self::assertEquals("a.xsd", $ex->getSchemaName());
            self::assertEquals("a.xsd", $ex->schemaName);
        }}

}
