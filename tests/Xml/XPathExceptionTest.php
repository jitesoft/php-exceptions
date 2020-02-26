<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  XPathExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Xml;

use Jitesoft\Exceptions\Xml\XPathException;

/**
 * @group XmlExceptions
 */
class XPathExceptionTest extends XmlExceptionTest {

    protected static function getTestProperties() {
        return array_merge(parent::getTestProperties(), [ 'xpath' ]);
    }

    protected function throwDefaultException() {
        throw new XPathException();
    }

    public function throwMessageException(string $message) {
        throw new XPathException($message,"invalid", "invalid", "a.xml", "/a/b/c");
    }

    public function testGetXpath() {
        try {
            $this->throwMessageException("Test");
        } catch (XPathException $ex) {
            $this->assertEquals("invalid", $ex->getXPath());
            $this->assertEquals("invalid", $ex->xPath);
        }
    }

}
