<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  JitesoftExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests;

use Exception;
use Jitesoft\Exceptions\JitesoftException;

/**
 * @group Exceptions
 */
class JitesoftExceptionTest extends ExceptionTestCase {

    public function testInnerExceptionWhichIsInherited() {
        try {
            throw new TestException("test outer", 1, new TestException("test inner", 2, null));
        } catch (JitesoftException $ex) {
            $this->assertInstanceOf(TestException::class, $ex);
            $this->assertInstanceOf(TestException::class, $ex->getPrevious());

            $this->assertEquals("test outer", $ex->getMessage());
            $this->assertEquals(1, $ex->getCode());

            $this->assertEquals("test inner", $ex->getPrevious()->getMessage());
            $this->assertEquals(2, $ex->getPrevious()->getCode());

            $this->assertArraySubset([
                "type"  => TestException::class,
                "error" => "test outer",
                "code"  => 1,
                "trace" => [
                    0 => [
                        "function" => "testInnerExceptionWhichIsInherited",
                        'class' => JitesoftExceptionTest::class
                    ]
                ],
                "file"  => (new \ReflectionClass($this))->getFileName(),
                "inner" => [
                    "type"  => TestException::class,
                    "error" => "test inner",
                    "code"  => 2,
                    "inner" => null,
                    "trace" => [
                        0 => [
                            "function" => "testInnerExceptionWhichIsInherited",
                            'class' => JitesoftExceptionTest::class

                        ]
                    ]
                ]
            ], $ex->toArray());

            $this->assertEquals(json_encode($ex), json_encode($ex->toArray()));
        }
    }

    public function testInnerExceptionIsSpException() {
        try {
            throw new TestException("test outer", 1, new Exception("test inner", 2, null));
        } catch (JitesoftException $ex) {
            $this->assertInstanceOf(TestException::class, $ex);
            $this->assertInstanceOf(Exception::class, $ex->getPrevious());

            $this->assertEquals("test outer", $ex->getMessage());
            $this->assertEquals(1, $ex->getCode());

            $this->assertEquals("test inner", $ex->getPrevious()->getMessage());
            $this->assertEquals(2, $ex->getPrevious()->getCode());

            $this->assertArraySubset([
                "type"  => TestException::class,
                "error" => "test outer",
                "code"  => 1,
                "trace" => [
                    0 => [
                        "function" => "testInnerExceptionIsSpException",
                        'class' => JitesoftExceptionTest::class
                    ]
                ],
                "file"  => (new \ReflectionClass($this))->getFileName(),
                "inner" => [
                    "type"  => Exception::class,
                    "error" => "test inner",
                    "code"  => 2,
                    "inner" => null,
                    "trace" => [
                        0 => [
                            "function" => "testInnerExceptionIsSpException",
                            'class' => JitesoftExceptionTest::class

                        ]
                    ]
                ]
            ], $ex->toArray());

            $this->assertEquals(json_encode($ex), json_encode($ex->toArray()));
        }
    }

    protected function getDefaultException(): \Jitesoft\Exceptions\JitesoftException {
        return new TestException();
    }

    public function getMessageException(string $message): \Jitesoft\Exceptions\JitesoftException {
        return new TestException($message);
    }
}

class TestException extends JitesoftException {

}
