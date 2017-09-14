<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  XmlExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\XmlExceptions;

use Jitesoft\Exceptions\Tests\ExceptionTestCase;
use Jitesoft\Exceptions\XmlExceptions\XmlException;

/**
 * @group XmlExceptions
 */
class XmlExceptionTest extends ExceptionTestCase {

    protected static function getTestProperties() {
        return array_merge(parent::getTestProperties(), [ 'xml', 'file_path', 'file_name' ]);
    }

    public function throwDefaultMessage() {
        $this->setExpectedMessage("Unexpected XML error.");
        throw new XmlException("invalid", "a.xml", "/a/b/c");
    }

    public function throwNoneDefaultMessage() {
        $this->setExpectedMessage("Test");
        throw new XmlException("invalid", "a.xml", "/a/b/c", "Test");
    }

    public function testGetXml() {
        try {
            $this->throwDefaultMessage();
        } catch (XmlException $ex) {
            $this->assertEquals("invalid", $ex->xml);
            $this->assertEquals("invalid", $ex->getXml());
        }
    }

    public function testGetFilePath() {
        try {
            $this->throwDefaultMessage();
        } catch (XmlException $ex) {
            $this->assertEquals("/a/b/c", $ex->path);
            $this->assertEquals("/a/b/c", $ex->getPath());
        }
    }

    public function testGetFileName() {
        try {
            $this->throwDefaultMessage();
        } catch (XmlException $ex) {
            $this->assertEquals("a.xml", $ex->fileName);
            $this->assertEquals("a.xml", $ex->getFileName());
        }
    }

}
