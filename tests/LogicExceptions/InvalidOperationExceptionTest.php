<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  InvalidOperationExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\LogicExceptions;

use Jitesoft\Exceptions\JitesoftException;
use Jitesoft\Exceptions\LogicExceptions\InvalidOperationException;
use Jitesoft\Exceptions\Tests\ExceptionTestCase;

/**
 * @group Exceptions
 * @group LogicExceptions
 * @group RuntimeExceptions
 */
class InvalidOperationExceptionTest extends ExceptionTestCase {

    public function testToArray() {
        try {
            throw new InvalidOperationException("No way!", 15);
        } catch (JitesoftException $ex) {
            $array = $ex->toArray();
            $this->assertHasConstantProperties($array);
            $this->assertArraySubset([
                'error' => "No way!",
                'code'  => 15,
                'inner' => null,
                'type'  => InvalidOperationException::class
            ], $array);
        }
    }

    public function testToJson() {
        try {
            throw new InvalidOperationException("Not okay!", 11);
        } catch (JitesoftException $ex) {
            $json = $ex->toJson();
            $this->assertJson($json);
            $array = json_decode($json, true);
            $this->assertHasConstantProperties($array);
            $this->assertArraySubset([
                'error' => "Not okay!",
                'code'  => 11,
                'inner' => null,
                'type'  => InvalidOperationException::class
            ], $array);
        }
    }
}
