<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  JsonExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Json;

use Jitesoft\Exceptions\JitesoftException;
use Jitesoft\Exceptions\Json\JsonException;
use Jitesoft\Exceptions\Tests\ExceptionTestCase;

/**
 * @group RuntimeExceptions
 * @group JsonExceptions
 */
class JsonExceptionTest extends ExceptionTestCase {

    protected static function getTestProperties() {
        return array_merge(parent::getTestProperties(), [ 'json', 'file_name', 'file_path' ]);
    }

    protected function getDefaultException(): JitesoftException {
        return new JsonException();
    }

    public function getMessageException(string $message): JitesoftException {
        throw new JsonException($message,"invalid", "/a/b/c", "a.json");
    }

    public function testGetJson() {
        try {
            throw $this->getMessageException("Test");
        } catch(JsonException $ex) {
            $this->assertEquals("invalid", $ex->getJson());
            $this->assertEquals("invalid", $ex->json);
        }
    }

    public function testGetFileName() {
        try {
            throw $this->getMessageException("Test");
        } catch (JsonException $ex) {
            $this->assertEquals("a.json", $ex->getFileName());
            $this->assertEquals("a.json", $ex->fileName);
        }
    }

    public function testGetPath() {
        try {
            throw $this->getMessageException("Test");
        } catch (JsonException $ex) {
            $this->assertEquals("/a/b/c", $ex->getPath());
            $this->assertEquals("/a/b/c", $ex->path);
        }
    }
}
