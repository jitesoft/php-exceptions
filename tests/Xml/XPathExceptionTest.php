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

    protected static function getTestProperties(): array {
        return array_merge(parent::getTestProperties(), [ 'xpath' ]);
    }

    protected function throwDefaultException(): void {
        throw new XPathException();
    }

    public function throwMessageException(string $message): void {
        throw new XPathException($message,"invalid", "invalid", "a.xml", "/a/b/c");
    }

    public function testGetXpath() {
        try {
            $this->throwMessageException("Test");
        } catch (XPathException $ex) {
            self::assertEquals("invalid", $ex->getXPath());
            self::assertEquals("invalid", $ex->xPath);
        }
    }

}
