<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  JsonExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\JsonExceptions;

use Jitesoft\Exceptions\JsonExceptions\JsonException;
use Jitesoft\Exceptions\Tests\ExceptionTestCase;

/**
 * @group RuntimeExceptions
 * @group JsonExceptions
 */
class JsonExceptionTest extends ExceptionTestCase {

    protected static function getTestProperties() {
        return array_merge(parent::getTestProperties(), [ 'json', 'file_name', 'file_path' ]);
    }

    public function throwDefaultMessage() {
        $this->setExpectedMessage("Unexpected json error.");
        throw new JsonException("invalid", "/a/b/c", "a.json");
    }

    public function throwNoneDefaultMessage() {
        $this->setExpectedMessage("Test");
        throw new JsonException("invalid", "/a/b/c", "a.json", "Test");
    }

    public function testGetJson() {
        try {
            $this->throwDefaultMessage();
        } catch(JsonException $ex) {
            $this->assertEquals("invalid", $ex->getJson());
            $this->assertEquals("invalid", $ex->json);
        }
    }

    public function testGetFileName() {
        try {
            $this->throwDefaultMessage();
        } catch (JsonException $ex) {
            $this->assertEquals("a.json", $ex->getFileName());
            $this->assertEquals("a.json", $ex->fileName);
        }
    }

    public function testGetPath() {
        try {
            $this->throwDefaultMessage();
        } catch (JsonException $ex) {
            $this->assertEquals("/a/b/c", $ex->getPath());
            $this->assertEquals("/a/b/c", $ex->path);
        }
    }
}
