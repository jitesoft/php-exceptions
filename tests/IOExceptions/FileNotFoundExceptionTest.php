<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  FileNotFoundExceptonTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\IOExceptions;

use Exception;
use Jitesoft\Exceptions\IOExceptions\FileNotFoundException;
use Jitesoft\Exceptions\JitesoftException;
use Jitesoft\Exceptions\Tests\BaseStructureTestTrait;
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
    use BaseStructureTestTrait;

    public function testWithOtherInnerException() {

        try {
            throw new FileNotFoundException('a.t', '', 0, new Exception("abc123"));
        } catch (FileNotFoundException $ex) {
            $this->assertInstanceOf(Exception::class, $ex->getPrevious());
            $arr = $ex->toArray();
            $this->assertBaseStructure($ex);
            $this->assertBaseStructure($arr['inner'], Exception::class);
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

            $this->assertBaseStructure($ex);
            $this->assertInstanceOf(FileNotFoundException::class, $ex->getPrevious());
            $this->assertBaseStructure($ex->getPrevious());

            $this->assertArraySubset([
                'inner' => [
                    'type' => FileNotFoundException::class,
                    'trace' => [
                        0 => [
                            'function' => 'testWithAsInnerException',
                            'class' => FileNotFoundExceptionTest::class
                        ]
                    ]
                ],
                'bad_file' => "a.txt"
            ], $ex->toArray());

            $this->assertArraySubset([
                'type' => FileNotFoundException::class,
                'bad_file' => 'inner.txt',
                'inner' => null
            ], $ex->getPrevious()->toArray());
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
            $this->assertBaseStructure($exceptionAsArray);

            $this->assertArraySubset([
                'error' => 'Failed to open file none.txt.',
                'code'  => 10,
                'file'  => (new ReflectionClass($this))->getFileName(),
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

            $this->assertBaseStructure($exceptionAsArray);

            $this->assertArraySubset([
                'type'  => FileNotFoundException::class,
                'error' => 'abc none.txt',
                'code'  => 5,
                'file'  => (new ReflectionClass($this))->getFileName(),
                'bad_file' => 'none.txt'
            ], $exceptionAsArray);
        }
    }


}
