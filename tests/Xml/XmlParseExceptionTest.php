<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  XmlParseExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Xml;

use Jitesoft\Exceptions\Xml\XmlParseException;

/**
 * @group XmlExceptions
 */
class XmlParseExceptionTest extends XmlExceptionTest {

    protected function throwDefaultException() {
        throw new XmlParseException();
    }

    public function throwMessageException(string $message) {
        throw new XmlParseException($message,"invalid", "a.xml", "/a/b/c");
    }

}
