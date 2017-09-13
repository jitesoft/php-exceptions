<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  ExceptionTestCase.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests;

use Jitesoft\Exceptions\JitesoftException;
use PHPUnit\Framework\AssertionFailedError;
use PHPUnit\Framework\TestCase;

/**
 * Class ExceptionTestCase
 */
abstract class ExceptionTestCase extends TestCase {

    /** @var string */
    protected $expectedMessage = "";

    protected function setExpectedMessage(string $message) {
        $this->expectedMessage = $message;
    }

    public final function testGetDefaultMessage() {
        try {
            $this->throwDefaultMessage();
        } catch (JitesoftException $ex) {
            $this->assertEquals($this->expectedMessage, $ex->getMessage());
        }
    }

    public final function testGetNoneDefaultMessage() {
        try {
            $this->throwNoneDefaultMessage();
        } catch (JitesoftException $ex) {
            $this->assertEquals($this->expectedMessage, $ex->getMessage());
        }
    }

    public abstract function throwDefaultMessage();
    public abstract function throwNoneDefaultMessage();

    protected static $properties = [];

    protected static function getTestProperties() {
        return [
            "type",
            "error",
            "line",
            "code",
            "file",
            "trace",
            "inner"
        ];
    }

    public function testHasProperties() {
        try {
            $this->throwDefaultMessage();
        } catch (JitesoftException $ex) {
            $this->assertHasProperties($ex->toArray(), static::getTestProperties());
        }
    }

    /**
     * @param array $ex
     * @param array $properties
     */
    protected function assertHasProperties(array $ex, array $properties) {
        foreach ($properties as $property) {
            $o = self::arrayHasKey($property);
            if (!$o->evaluate($ex, '', true)) {
                throw new AssertionFailedError(
                    sprintf("Property %s not found in array.", $property)
                );
            }
        }

        $this->addToAssertionCount(1);
    }

}
