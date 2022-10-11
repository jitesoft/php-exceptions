<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  JsonExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Json;

use Jitesoft\Exceptions\Json\JsonException;
use Jitesoft\Exceptions\Tests\ExceptionTestCase;

/**
 * @group RuntimeExceptions
 * @group JsonExceptions
 */
class JsonExceptionTest extends ExceptionTestCase {

    protected static function getTestProperties(): array {
        return array_merge(parent::getTestProperties(), [ 'json', 'file_name', 'file_path' ]);
    }

    protected function throwDefaultException(): void {
        throw new JsonException();
    }

    public function throwMessageException(string $message): void {
        throw new JsonException($message,"invalid", "/a/b/c", "a.json");
    }

    public function testGetJson() {
        try {
            $this->throwMessageException("Test");
        } catch(JsonException $ex) {
            self::assertEquals("invalid", $ex->getJson());
            self::assertEquals("invalid", $ex->json);
        }
    }

    public function testGetFileName() {
        try {
            $this->throwMessageException("Test");
        } catch (JsonException $ex) {
            self::assertEquals("a.json", $ex->getFileName());
            self::assertEquals("a.json", $ex->fileName);
        }
    }

    public function testGetPath() {
        try {
            $this->throwMessageException("Test");
        } catch (JsonException $ex) {
            self::assertEquals("/a/b/c", $ex->getPath());
            self::assertEquals("/a/b/c", $ex->path);
        }
    }
}
