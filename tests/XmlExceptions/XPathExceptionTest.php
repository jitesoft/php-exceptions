<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  XPathExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\XmlExceptions;

use Jitesoft\Exceptions\XmlExceptions\XPathException;

/**
 * @group XmlExceptions
 */
class XPathExceptionTest extends XmlExceptionTest {

    protected static function getTestProperties() {
        return array_merge(parent::getTestProperties(), [ 'xpath' ]);
    }

    public function throwDefaultMessage() {
        $this->setExpectedMessage("Failed to evaluate XPath (invalid).");
        throw new XPathException("invalid", "invalid", "a.xml", "/a/b/c");
    }

    public function throwNoneDefaultMessage() {
        $this->setExpectedMessage("Test");
        throw new XPathException("invalid", "invalid", "a.xml", "/a/b/c", "Test");
    }

    public function testGetXPath() {
        try {
            $this->throwDefaultMessage();
        } catch (XPathException $ex) {
            $this->assertEquals("invalid", $ex->getXPath());
            $this->assertEquals("invalid", $ex->xPath);
        }
    }

}
