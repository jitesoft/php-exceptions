<?php

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  BaseStructureTestTrait.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

namespace Jitesoft\Exceptions\Tests;

use Jitesoft\Exceptions\JitesoftException;

trait BaseStructureTestTrait {


    /**
     * @param array|JitesoftException|array $exception
     * @param string $type
     */
    public function assertBaseStructure($exception, string $type = "") {
        if ($exception instanceof JitesoftException) {
            $exceptionAsArray = $exception->toArray();
        } else {
            $exceptionAsArray = $exception;
        }

        $this->assertArrayHasKey('type', $exceptionAsArray);
        $this->assertArrayHasKey('error', $exceptionAsArray);
        $this->assertArrayHasKey('line', $exceptionAsArray);
        $this->assertArrayHasKey('code', $exceptionAsArray);
        $this->assertArrayHasKey('file', $exceptionAsArray);
        $this->assertArrayHasKey('trace', $exceptionAsArray);
        $this->assertArrayHasKey('inner', $exceptionAsArray);

        $reflectionClass = new \ReflectionClass($this);

        $subset = [
            'file' => $reflectionClass->getFileName(),
            'trace' => [
                0 => [
                    'class' => $reflectionClass->getName()
                ]
            ]
        ];

        if ($type) {
            $subset['type'] = $type;
        } else if ($exception instanceof JitesoftException) {
            $subset['type'] = get_class($exception);
        }

        $this->assertArraySubset($subset, $exceptionAsArray);
    }

}
