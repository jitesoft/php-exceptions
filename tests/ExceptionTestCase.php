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

    public final function testGetDefaultMessage() {
        try {
            throw $this->getDefaultException();
        } catch (JitesoftException $ex) {
            $message = $this->getDefaultException()->getMessage();
            $this->assertEquals($message, $ex->getMessage());
        }
    }

    public final function testGetNoneDefaultMessage() {
        try {
            throw $this->getMessageException("Test");
        } catch (JitesoftException $ex) {
            $this->assertEquals("Test", $ex->getMessage());
        }
    }

    protected abstract function getDefaultException() : JitesoftException;

    // TODO: Rename to `throwMessageException` instead of 'get'.
    // TODO: Or change all occurrences where it throws to instead just return.
    protected abstract function getMessageException(string $message): JitesoftException;

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

    public final function testHasProperties() {
        try {
            throw $this->getDefaultException();
        } catch (JitesoftException $ex) {
            $this->assertHasProperties($ex->toArray(), static::getTestProperties());
        }
    }

    /**
     * @param array $ex
     * @param array $properties
     */
    protected final function assertHasProperties(array $ex, array $properties) {
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
