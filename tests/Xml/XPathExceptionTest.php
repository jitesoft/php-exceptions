<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  XPathExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Xml;

use Jitesoft\Exceptions\JitesoftException;
use Jitesoft\Exceptions\Xml\XPathException;

/**
 * @group XmlExceptions
 */
class XPathExceptionTest extends XmlExceptionTest {

    protected static function getTestProperties() {
        return array_merge(parent::getTestProperties(), [ 'xpath' ]);
    }

    protected function getDefaultException(): JitesoftException {
        return new XPathException();
    }

    public function getMessageException(string $message): JitesoftException {
        return new XPathException($message,"invalid", "invalid", "a.xml", "/a/b/c");
    }

    public function testGetXPath() {
        try {
            throw $this->getMessageException("Test");
        } catch (XPathException $ex) {
            $this->assertEquals("invalid", $ex->getXPath());
            $this->assertEquals("invalid", $ex->xPath);
        }
    }

}
