<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  CertificateExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\SecurityExceptions;

use Jitesoft\Exceptions\SecurityExceptions\CertificateException;

/**
 * @group SecurityExceptions
 */
class CertificateExceptionTest extends SecurityExceptionTest {

    protected static function getTestProperties() {
        return array_merge(parent::getTestProperties(), [ 'certificate_name' ]);
    }

    public function throwDefaultMessage() {
        $this->setExpectedMessage("Encountered an issue with certificate named 'test.cert'");
        throw new CertificateException("test.cert");
    }

    public function throwNoneDefaultMessage() {
        $this->setExpectedMessage("Test");
        throw new CertificateException("test.cert", "Test");
    }

    public function testGetCertificateName() {
        try {
            $this->throwDefaultMessage();
        } catch (CertificateException $ex) {
            $this->assertEquals("test.cert", $ex->getCertificateName());
            $this->assertEquals("test.cert", $ex->certificateName);
        }
    }

}
