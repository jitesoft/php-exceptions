<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  CertificateExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Security;

use Jitesoft\Exceptions\JitesoftException;
use Jitesoft\Exceptions\Security\CertificateException;

/**
 * @group SecurityExceptions
 */
class CertificateExceptionTest extends SecurityExceptionTest {

    protected static function getTestProperties() {
        return array_merge(parent::getTestProperties(), [ 'certificate_name' ]);
    }

    protected function getDefaultException(): JitesoftException {
        return new CertificateException();
    }

    public function getMessageException(string $message): JitesoftException {
        return new CertificateException($message, "test.cert");
    }

    public function testGetCertificateName() {
        try {
            throw $this->getMessageException("Test");
        } catch (CertificateException $ex) {
            $this->assertEquals("test.cert", $ex->getCertificateName());
            $this->assertEquals("test.cert", $ex->certificateName);
        }
    }

}
