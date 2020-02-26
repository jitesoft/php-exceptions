<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  JitesoftExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests;

use ArrayAccess;
use Exception;
use Jitesoft\Exceptions\JitesoftException;
use PHPUnit\Util\InvalidArgumentHelper;

/**
 * @group Exceptions
 */
class JitesoftExceptionTest extends ExceptionTestCase {

    public function testGetInvalid() {
        try {
            throw new TestException();
        } catch (JitesoftException $ex) {
            $this->assertNull($ex->abcdefghijklmnopqrstuvwxyzåäö);
        }
    }

    /**
     * Temporary copy of assertArraySubset to remove deprecation warning until a new method working alike exists.
     *
     * @param array|ArrayAccess $subset
     * @param array|ArrayAccess $array
     * @param bool              $checkForObjectIdentity
     * @param string            $message
     */
    public static function tempAssertArraySubset($subset, $array, bool $checkForObjectIdentity = false, string $message = ''): void
    {


        if (!(\is_array($subset) || $subset instanceof ArrayAccess)) {
            throw InvalidArgumentHelper::factory(
                1,
                'array or ArrayAccess'
            );
        }

        if (!(\is_array($array) || $array instanceof ArrayAccess)) {
            throw InvalidArgumentHelper::factory(
                2,
                'array or ArrayAccess'
            );
        }

        $constraint = new ArraySubsetConstraint($subset, $checkForObjectIdentity);

        static::assertThat($array, $constraint, $message);
    }

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

            /** @noinspection PhpDeprecationInspection */
            $this->tempAssertArraySubset([
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

            $this->tempAssertArraySubset([
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

    protected function throwDefaultException(): \Jitesoft\Exceptions\JitesoftException {
        throw new TestException();
    }

    public function throwMessageException(string $message): \Jitesoft\Exceptions\JitesoftException {
        throw new TestException($message);
    }
}

class TestException extends JitesoftException {

}
