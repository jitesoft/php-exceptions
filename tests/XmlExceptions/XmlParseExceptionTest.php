<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  XmlParseExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\XmlExceptions;

use Jitesoft\Exceptions\XmlExceptions\XmlParseException;

/**
 * @group XmlExceptions
 */
class XmlParseExceptionTest extends XmlExceptionTest {

    public function throwDefaultMessage() {
        $this->setExpectedMessage("Failed to parse XML.");
        throw new XmlParseException("invalid", "a.xml", "/a/b/c");
    }

    public function throwNoneDefaultMessage() {
        $this->setExpectedMessage("Test");
        throw new XmlParseException("invalid", "a.xml", "/a/b/c", "Test");
    }

}
