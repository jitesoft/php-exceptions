<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  JitesoftExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft
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

    public function testGetInvalid(): void {
        try {
            throw new TestException();
        } catch (JitesoftException $ex) {
            /** @noinspection PhpUndefinedFieldInspection */
            self::assertNull($ex->abcdefghijklmnopqrstuvwxyz);
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

    public function testInnerExceptionWhichIsInherited(): void {
        try {
            throw new TestException("test outer", 1, new TestException("test inner", 2, null));
        } catch (JitesoftException $ex) {
            self::assertInstanceOf(TestException::class, $ex);
            self::assertInstanceOf(TestException::class, $ex->getPrevious());

            self::assertEquals("test outer", $ex->getMessage());
            self::assertEquals(1, $ex->getCode());

            self::assertEquals("test inner", $ex->getPrevious()->getMessage());
            self::assertEquals(2, $ex->getPrevious()->getCode());

            self::tempAssertArraySubset([
                "type"  => TestException::class,
                "error" => "test outer",
                "code"  => 1,
                "trace" => [
                    0 => [
                        "function" => "testInnerExceptionWhichIsInherited",
                        'class' => __CLASS__
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
                            'class' => __CLASS__
                        ]
                    ]
                ]
            ], $ex->toArray());

            /** @noinspection PhpUnhandledExceptionInspection */
            self::assertEquals(json_encode($ex, JSON_THROW_ON_ERROR), json_encode($ex->toArray(), JSON_THROW_ON_ERROR));
        }
    }

    public function testInnerExceptionIsSpException(): void {
        try {
            throw new TestException("test outer", 1, new Exception("test inner", 2, null));
        } catch (JitesoftException $ex) {
            self::assertInstanceOf(TestException::class, $ex);
            self::assertInstanceOf(Exception::class, $ex->getPrevious());
            self::assertEquals("test outer", $ex->getMessage());
            self::assertEquals(1, $ex->getCode());
            self::assertEquals("test inner", $ex->getPrevious()->getMessage());
            self::assertEquals(2, $ex->getPrevious()->getCode());

            self::tempAssertArraySubset([
                "type"  => TestException::class,
                "error" => "test outer",
                "code"  => 1,
                "trace" => [
                    0 => [
                        "function" => "testInnerExceptionIsSpException",
                        'class' => __CLASS__
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
                            'class' => __CLASS__
                        ]
                    ]
                ]
            ], $ex->toArray());

            /** @noinspection PhpUnhandledExceptionInspection */
            $this->assertEquals(json_encode($ex, JSON_THROW_ON_ERROR), json_encode($ex->toArray(), JSON_THROW_ON_ERROR));
        }
    }

    protected function throwDefaultException(): void {
        throw new TestException();
    }

    public function throwMessageException(string $message): void {
        throw new TestException($message);
    }
}

class TestException extends JitesoftException {

}
