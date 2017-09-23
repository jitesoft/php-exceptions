<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpUpgradeRequiredExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\HttpExceptions\ClientExceptions;

use Jitesoft\Exceptions\HttpExceptions\ClientExceptions\HttpUpgradeRequiredException;
use Jitesoft\Exceptions\JitesoftException;
use Jitesoft\Exceptions\Tests\HttpExceptions\HttpExceptionTest;

/**
 * @group Exceptions
 * @group HttpExceptions
 * @group RuntimeExceptions
 * @group HttpClientExceptions
 */
class HttpUpgradeRequiredExceptionTest extends HttpExceptionTest {

    protected $expectedErrorCode = 426;

    protected function getDefaultException(): JitesoftException {
        return new HttpUpgradeRequiredException();
    }

    public function getMessageException(string $message): JitesoftException {
        return new HttpUpgradeRequiredException($message);
    }

    protected static function getTestProperties() {
        return array_merge(parent::getTestProperties(), ['protocol']);
    }

}
