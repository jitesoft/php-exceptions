<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  XmlExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Xml;

use Jitesoft\Exceptions\JitesoftException;
use Jitesoft\Exceptions\Tests\ExceptionTestCase;
use Jitesoft\Exceptions\Xml\XmlException;

/**
 * @group XmlExceptions
 */
class XmlExceptionTest extends ExceptionTestCase {

    protected static function getTestProperties() {
        return array_merge(parent::getTestProperties(), [ 'xml', 'file_path', 'file_name' ]);
    }

    protected function throwDefaultException() {
        throw new XmlException();
    }

    public function throwMessageException(string $message) {
        throw new XmlException($message,"invalid", "a.xml", "/a/b/c");
    }

    public function testGetXml() {
        try {
            $this->throwMessageException("Test");
        } catch (XmlException $ex) {
            $this->assertEquals("invalid", $ex->xml);
            $this->assertEquals("invalid", $ex->getXml());
        }
    }

    public function testGetFilePath() {
        try {
            $this->throwMessageException("Test");
        } catch (XmlException $ex) {
            $this->assertEquals("/a/b/c", $ex->path);
            $this->assertEquals("/a/b/c", $ex->getPath());
        }
    }

    public function testGetFileName() {
        try {
            $this->throwMessageException("Test");
        } catch (XmlException $ex) {
            $this->assertEquals("a.xml", $ex->fileName);
            $this->assertEquals("a.xml", $ex->getFileName());
        }
    }

}
