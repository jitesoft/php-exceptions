<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  ExceptionTestCase.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests;

use Jitesoft\Exceptions\JitesoftException;
use PHPUnit\Framework\AssertionFailedError;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionParameter;

/**
 * Class ExceptionTestCase
 */
abstract class ExceptionTestCase extends TestCase {

    public final function testGetDefaultMessage() {
        try {
            $this->throwDefaultException();
        } catch (JitesoftException $ex) {

            $message = array_filter(
                (new ReflectionClass(get_class($ex)))->getConstructor()->getParameters(),
                function(ReflectionParameter $parm) {
                    return $parm->getName() === "message";
                }
            );
            $message = array_values($message);

            /** @var $message ReflectionParameter[] */
            $this->assertNotEmpty($message);

            $message = $message[0]->getDefaultValue();
            $count   = substr_count($message, '%s');
            $args    = array_fill(0, $count, '');

            $this->assertEquals(sprintf($message, ...$args), $ex->getMessage());
        }
    }

    public final function testGetNoneDefaultMessage() {
        try {
            $this->throwMessageException("Test");
        } catch (JitesoftException $ex) {
            $this->assertEquals("Test", $ex->getMessage());
        }
    }

    /**
     * @throws JitesoftException
     */
    protected abstract function throwDefaultException();

    /**
     * @throws JitesoftException
     */
    protected abstract function throwMessageException(string $message);

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
            $this->throwDefaultException();
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
