<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpUpgradeRequiredExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Http\Client;

use Jitesoft\Exceptions\Http\Client\HttpUpgradeRequiredException;
use Jitesoft\Exceptions\Tests\Http\HttpExceptionTest;

/**
 * @group Exceptions
 * @group HttpExceptions
 * @group RuntimeExceptions
 * @group HttpClientExceptions
 */
class HttpUpgradeRequiredExceptionTest extends HttpExceptionTest {

    protected $expectedErrorCode = 426;

    protected function throwDefaultException(): void {
        throw new HttpUpgradeRequiredException();
    }

    public function throwMessageException(string $message) : void {
        throw new HttpUpgradeRequiredException($message);
    }

    protected static function getTestProperties(): array {
        return array_merge(parent::getTestProperties(), ['protocol']);
    }

}
