<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  XmlSchemaValidationExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\XmlExceptions;

use Jitesoft\Exceptions\XmlExceptions\XmlSchemaValidationException;

/**
 * @group XmlExceptions
 * @group XmlSchemaExceptions
 */
class XmlSchemaValidationExceptionTest extends XmlSchemaExceptionTest {

    public function throwDefaultMessage() {
        $this->setExpectedMessage("Xml did not match schema.");
        throw new XmlSchemaValidationException("invalid", "invalid", "a.xsd", "/a/b/c/d", "a.xml", "/a/b/c");
    }

    public function throwNoneDefaultMessage() {
        $this->setExpectedMessage("Test");
        throw new XmlSchemaValidationException("invalid", "invalid", "a.xsd", "/a/b/c/d", "a.xml", "/a/b/c", "Test");
    }

}
