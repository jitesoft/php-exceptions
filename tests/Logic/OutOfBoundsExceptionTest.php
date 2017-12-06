<?php

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  OutOfBoundsExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

namespace Jitesoft\Exceptions\Tests\Logic;

use Jitesoft\Exceptions\JitesoftException;
use Jitesoft\Exceptions\Logic\OutOfBoundsException;
use Jitesoft\Exceptions\Tests\ExceptionTestCase;

class OutOfBoundsExceptionTest extends ExceptionTestCase {

    protected static function getTestProperties() {
        return array_merge(['index', 'size'], parent::getTestProperties());
    }


    /**
     * @throws JitesoftException
     */
    protected function throwDefaultException() {
        throw new OutOfBoundsException();
    }

    /**
     * @throws JitesoftException
     */
    protected function throwMessageException(string $message) {
        throw new OutOfBoundsException($message, 10, 9);
    }

    public function testGetIndex() {
        try {
            $this->throwMessageException('abc');
        } catch (OutOfBoundsException $ex) {
            $this->assertEquals(10, $ex->index);
            $this->assertEquals(10, $ex->getIndex());
        }
    }

    public function testGetSize() {
        try {
            $this->throwMessageException('abc');
        } catch (OutOfBoundsException $ex) {
            $this->assertEquals(9, $ex->size);
            $this->assertEquals(9, $ex->getSize());
        }
    }


}
