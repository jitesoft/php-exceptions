<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  XmlSchemaValidationExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\XmlExceptions;

use Jitesoft\Exceptions\JitesoftException;
use Jitesoft\Exceptions\XmlExceptions\XmlSchemaValidationException;

/**
 * @group XmlExceptions
 * @group XmlSchemaExceptions
 */
class XmlSchemaValidationExceptionTest extends XmlSchemaExceptionTest {

    protected function getDefaultException(): JitesoftException {
        return new XmlSchemaValidationException();
    }

    public function getMessageException(string $message): JitesoftException {
        return new XmlSchemaValidationException($message,"invalid", "invalid", "a.xsd", "/a/b/c/d", "a.xml", "/a/b/c");
    }

}
