<?php

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  ExceptionTestCase.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

namespace Jitesoft\Exceptions\Tests;

use PHPUnit\Framework\AssertionFailedError;
use PHPUnit\Framework\TestCase;

/**
 * Class ExceptionTestCase
 */
class ExceptionTestCase extends TestCase {

    protected static $properties = [];

    /**
     * Should return a list of properties which the base class will test (other than the ones already set in base).
     *
     * @return array
     */
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

    public static function setUpBeforeClass() {
        parent::setUpBeforeClass();

        self::$properties = self::getTestProperties();
    }


    /**
     * @param array $ex
     */
    protected function assertHasConstantProperties(array $ex) {
        $this->assertHasProperties($ex, self::$properties);
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
