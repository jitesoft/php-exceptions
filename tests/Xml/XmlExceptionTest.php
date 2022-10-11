<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  XmlExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Xml;

use Jitesoft\Exceptions\JitesoftException;
use Jitesoft\Exceptions\Tests\ExceptionTestCase;
use Jitesoft\Exceptions\Xml\XmlException;

/**
 * @group XmlExceptions
 */
class XmlExceptionTest extends ExceptionTestCase {

    protected static function getTestProperties(): array {
        return array_merge(parent::getTestProperties(), [ 'xml', 'file_path', 'file_name' ]);
    }

    protected function throwDefaultException(): void {
        throw new XmlException();
    }

    public function throwMessageException(string $message): void {
        throw new XmlException($message,"invalid", "a.xml", "/a/b/c");
    }

    public function testGetXml() {
        try {
            $this->throwMessageException("Test");
        } catch (XmlException $ex) {
            self::assertEquals("invalid", $ex->xml);
            self::assertEquals("invalid", $ex->getXml());
        }
    }

    public function testGetFilePath() {
        try {
            $this->throwMessageException("Test");
        } catch (XmlException $ex) {
            self::assertEquals("/a/b/c", $ex->path);
            self::assertEquals("/a/b/c", $ex->getPath());
        }
    }

    public function testGetFileName() {
        try {
            $this->throwMessageException("Test");
        } catch (XmlException $ex) {
            self::assertEquals("a.xml", $ex->fileName);
            self::assertEquals("a.xml", $ex->getFileName());
        }
    }

}
