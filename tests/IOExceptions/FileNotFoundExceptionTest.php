<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  FileNotFoundExceptonTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\IOExceptions;

use Jitesoft\Exceptions\IOExceptions\FileNotFoundException;
use Jitesoft\Exceptions\Tests\ExceptionTestCase;

/**
 * Test cases for FileNotFoundException
 *
 * @group IOExceptions
 * @group Exceptions
 * @group RuntimeExceptions
 */
class FileNotFoundExceptionTest extends ExceptionTestCase {

    protected static function getTestProperties() {
        $arr = ['bad_file'];
        return array_push($arr, parent::getTestProperties());
    }

    public function testGetBadFile() {
        $ex = new FileNotFoundException("test.x");
        $this->assertEquals("test.x", $ex->getBadPath());
    }

    public function testToArray() {
        try {
            throw new FileNotFoundException("none.txt", "Failed to open file %s.", 10);
        } catch (FileNotFoundException $ex) {
            $array = $ex->toArray();
            $this->assertHasConstantProperties($array);
            $this->assertArraySubset([
                'error' => "Failed to open file none.txt.",
                'code'  => 10,
                'inner' => null,
                'type'  => FileNotFoundException::class,
                'bad_path' => 'none.txt'
            ], $array);
        }
    }

    public function testToJson() {
        try {
            throw new FileNotFoundException("none.txt", "abc", 5, null);
        } catch (FileNotFoundException $ex) {
            $json = $ex->toJson();
            $this->assertJson($json);
            $array = json_decode($json, true);
            $this->assertHasConstantProperties($array);
            $this->assertArraySubset([
                'error' => "abc",
                'code'  => 5,
                'inner' => null,
                'type'  => FileNotFoundException::class,
                'bad_path' => 'none.txt'
            ], $array);
        }
    }
}
