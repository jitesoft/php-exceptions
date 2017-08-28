<?php

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  NotImplementedExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

namespace Jitesoft\Exceptions\Tests\LazyExceptions;

use Jitesoft\Exceptions\JitesoftException;
use Jitesoft\Exceptions\LazyExceptions\NotImplementedException;
use Jitesoft\Exceptions\Tests\ExceptionTestCase;

/**
 * Test cases for NotImplementedException
 *
 * @group LazyExceptions
 * @group Exceptions
 * @group RuntimeExceptions
 */
class NotImplementedExceptionTest extends ExceptionTestCase {

    public function testToArray() {
        try {
            throw new NotImplementedException("Not implemented.", 10);
        } catch (JitesoftException $ex) {
            $array = $ex->toArray();
            $this->assertHasConstantProperties($array);
            $this->assertArraySubset([
                'error' => "Not implemented.",
                'code'  => 10,
                'inner' => null,
                'type'  => NotImplementedException::class
            ], $array);
        }
    }

    public function testToJson() {
        try {
            throw new NotImplementedException("Not implemented.", 10);
        } catch (JitesoftException $ex) {
            $json = $ex->toJson();
            $this->assertJson($json);
            $array = json_decode($json, true);
            $this->assertHasConstantProperties($array);
            $this->assertArraySubset([
                'error' => "Not implemented.",
                'code'  => 10,
                'inner' => null,
                'type'  => NotImplementedException::class
            ], $array);
        }
    }


}
