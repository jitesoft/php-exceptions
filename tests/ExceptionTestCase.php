<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  ExceptionTestCase.php - Part of the php-exceptions project.

  © - Jitesoft
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

    final public function testGetDefaultMessage(): void {
        try {
            $this->throwDefaultException();
        } catch (JitesoftException $ex) {

            $message = array_filter(
                (new ReflectionClass(get_class($ex)))->getConstructor()->getParameters(),
                static function(ReflectionParameter $parm) {
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

    final public function testGetNoneDefaultMessage(): void {
        try {
            $this->throwMessageException("Test");
        } catch (JitesoftException $ex) {
            $this->assertEquals("Test", $ex->getMessage());
        }
    }

    /**
     * @throws JitesoftException
     */
    abstract protected function throwDefaultException(): void;

    /**
     * @throws JitesoftException
     */
    abstract protected function throwMessageException(string $message): void;

    protected static function getTestProperties(): array {
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

    /**
     * @return void
     */
    final public function testHasProperties(): void {
        try {
            $this->throwDefaultException();
        } catch (JitesoftException $ex) {
            $this->assertHasProperties($ex->toArray(), static::getTestProperties());
        }
    }

    /**
     * @param array $ex
     * @param array $properties
     * @return void
     */
    final protected function assertHasProperties(array $ex, array $properties): void {
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
