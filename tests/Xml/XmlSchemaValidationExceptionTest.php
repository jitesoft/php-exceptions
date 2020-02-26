<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  XmlSchemaValidationExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Xml;

use Jitesoft\Exceptions\JitesoftException;
use Jitesoft\Exceptions\Xml\XmlSchemaValidationException;

/**
 * @group XmlExceptions
 * @group XmlSchemaExceptions
 */
class XmlSchemaValidationExceptionTest extends XmlSchemaExceptionTest {

    protected function throwDefaultException() {
        throw new XmlSchemaValidationException();
    }

    public function throwMessageException(string $message) {
        throw new XmlSchemaValidationException($message,"invalid", "invalid", "a.xsd", "/a/b/c/d", "a.xml", "/a/b/c");
    }

}
