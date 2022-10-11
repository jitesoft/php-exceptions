<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  OutOfBoundsExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Logic;

use Jitesoft\Exceptions\Logic\InvalidKeyException;
use Jitesoft\Exceptions\Tests\ExceptionTestCase;

class InvalidKeyExceptionTest extends ExceptionTestCase {

    protected static function getTestProperties(): array {
        return array_merge(['keyName'], parent::getTestProperties());
    }


    /**
     * @throws InvalidKeyException
     */
    protected function throwDefaultException(): void {
        throw new InvalidKeyException();
    }

    /**
     * @throws InvalidKeyException
     */
    protected function throwMessageException(string $message): void {
        throw new InvalidKeyException($message, 'testKey', 9);
    }

    public function testGetKey(): void {
        try {
            $this->throwMessageException('abc');
        } catch (InvalidKeyException $ex) {
            $this->assertEquals('testKey', $ex->getKeyName());
        }
    }

}
