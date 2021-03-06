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

    protected static function getTestProperties() {
        return array_merge(parent::getTestProperties(), [ 'certificate_name' ]);
    }

    protected function throwDefaultException() {
        throw new CertificateException();
    }

    public function throwMessageException(string $message) {
        throw new CertificateException($message, "test.cert");
    }

    public function testGetCertificateName() {
        try {
            $this->throwMessageException("Test");
        } catch (CertificateException $ex) {
            $this->assertEquals("test.cert", $ex->getCertificateName());
            $this->assertEquals("test.cert", $ex->certificateName);
        }
    }

}
