<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  CertificateExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Security;

use Jitesoft\Exceptions\Security\CertificateException;

/**
 * @group SecurityExceptions
 */
class CertificateExceptionTest extends SecurityExceptionTest {

    protected static function getTestProperties(): array {
        return array_merge(parent::getTestProperties(), [ 'certificate_name' ]);
    }

    protected function throwDefaultException(): void {
        throw new CertificateException();
    }

    public function throwMessageException(string $message): void {
        throw new CertificateException($message, "test.cert");
    }

    public function testGetCertificateName() {
        try {
            $this->throwMessageException("Test");
        } catch (CertificateException $ex) {
            self::assertEquals("test.cert", $ex->getCertificateName());
            self::assertEquals("test.cert", $ex->certificateName);
        }
    }

}
