<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  FileNotFoundExceptonTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\IOExceptions;

use Exception;
use Jitesoft\Exceptions\IOExceptions\FileNotFoundException;
use Jitesoft\Exceptions\JitesoftException;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

/**
 * Test cases for FileNotFoundException
 *
 * @group IOExceptions
 * @group Exceptions
 * @group RuntimeExceptions
 */
class FileNotFoundExceptionTest extends TestCase {

    public function testWithOtherInnerException() {

        try {
            throw new FileNotFoundException('a.t', '', 0, new Exception("abc123"));
        } catch (FileNotFoundException $ex) {
            $this->assertInstanceOf(Exception::class, $ex->getPrevious());
            $arr = $ex->toArray();

            $inner = $arr['inner'];

            $this->assertArrayHasKey('type', $inner);
            $this->assertArrayHasKey('error', $inner);
            $this->assertArrayHasKey('line', $inner);
            $this->assertArrayHasKey('code', $inner);
            $this->assertArrayHasKey('file', $inner);
            $this->assertArrayHasKey('trace', $inner);
            $this->assertArrayHasKey('inner', $inner);
        }
    }

    public function testWithAsInnerException() {

        try {
            throw new FileNotFoundException(
                "a.txt",
                "",
                0,
                new FileNotFoundException("inner.txt", "Inner")
            );

        } catch (FileNotFoundException $ex) {

            $this->assertInstanceOf(FileNotFoundException::class, $ex->getPrevious());
            $exceptionAsArray = $ex->getPrevious()->toArray();

            $this->assertArrayHasKey('type', $exceptionAsArray);
            $this->assertArrayHasKey('error', $exceptionAsArray);
            $this->assertArrayHasKey('line', $exceptionAsArray);
            $this->assertArrayHasKey('code', $exceptionAsArray);
            $this->assertArrayHasKey('file', $exceptionAsArray);
            $this->assertArrayHasKey('trace', $exceptionAsArray);
            $this->assertArrayHasKey('inner', $exceptionAsArray);
            $this->assertArrayHasKey('bad_file', $exceptionAsArray);

            $innerSubset = [
                'type' => FileNotFoundException::class,
                'error' => 'Inner',
                'file' => (new ReflectionClass($this))->getFileName(),
                'trace' => [
                    0 => [
                        'function' => 'testWithAsInnerException',
                        'class' => FileNotFoundExceptionTest::class
                    ]
                ],
                'inner' => null,
                'bad_file' => 'inner.txt'
            ];

            $this->assertArraySubset($innerSubset, $exceptionAsArray);
            $this->assertArraySubset([
                "inner" => $innerSubset
            ], $ex->toArray());
        }
    }

    public function testGetBadFile() {
        $ex = new FileNotFoundException("test.x");
        $this->assertEquals("test.x", $ex->getBadFile());
    }

    public function testToArray() {
        try {
            throw new FileNotFoundException("none.txt", "Failed to open file %s.", 10, null);

        } catch (FileNotFoundException $ex) {

            $this->assertInstanceOf(JitesoftException::class, $ex);
            $exceptionAsArray = $ex->toArray();
            $this->assertArrayHasKey('type', $exceptionAsArray);
            $this->assertArrayHasKey('error', $exceptionAsArray);
            $this->assertArrayHasKey('line', $exceptionAsArray);
            $this->assertArrayHasKey('code', $exceptionAsArray);
            $this->assertArrayHasKey('file', $exceptionAsArray);
            $this->assertArrayHasKey('trace', $exceptionAsArray);
            $this->assertArrayHasKey('inner', $exceptionAsArray);
            $this->assertArrayHasKey('bad_file', $exceptionAsArray);

            $this->assertArraySubset([
                'type'  => FileNotFoundException::class,
                'error' => 'Failed to open file none.txt.',
                'code'  => 10,
                'file'  => (new ReflectionClass($this))->getFileName(),
                'trace' => [
                    0 => [
                        'function' => 'testToArray',
                        'class'    => FileNotFoundExceptionTest::class
                    ]
                ],
                'inner' => null,
                'bad_file' => 'none.txt'
            ], $exceptionAsArray);
        }
    }

    public function testToJson() {
        try {
            throw new FileNotFoundException("none.txt", "abc %s", 5, null);
        } catch (FileNotFoundException $ex) {
            $this->assertInstanceOf(JitesoftException::class, $ex);
            $exceptionAsJson = $ex->toJson();
            $this->assertJson($exceptionAsJson);
            $exceptionAsArray = json_decode($exceptionAsJson, true);

            $this->assertArrayHasKey('type', $exceptionAsArray);
            $this->assertArrayHasKey('error', $exceptionAsArray);
            $this->assertArrayHasKey('line', $exceptionAsArray);
            $this->assertArrayHasKey('code', $exceptionAsArray);
            $this->assertArrayHasKey('file', $exceptionAsArray);
            $this->assertArrayHasKey('trace', $exceptionAsArray);
            $this->assertArrayHasKey('inner', $exceptionAsArray);
            $this->assertArrayHasKey('bad_file', $exceptionAsArray);

            $this->assertArraySubset([
                'type'  => FileNotFoundException::class,
                'error' => 'abc none.txt',
                'code'  => 5,
                'file'  => (new ReflectionClass($this))->getFileName(),
                'trace' => [
                    0 => [
                        'function' => 'testToJson',
                        'class'    => FileNotFoundExceptionTest::class
                    ]
                ],
                'inner' => null,
                'bad_file' => 'none.txt'
            ], $exceptionAsArray);
        }
    }


}
