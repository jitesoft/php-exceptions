<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  XmlParseExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Xml;

use Jitesoft\Exceptions\JitesoftException;
use Jitesoft\Exceptions\Xml\XmlParseException;

/**
 * @group XmlExceptions
 */
class XmlParseExceptionTest extends XmlExceptionTest {

    protected function getDefaultException(): JitesoftException {
        return new XmlParseException();
    }

    public function getMessageException(string $message): JitesoftException {
        throw new XmlParseException($message,"invalid", "a.xml", "/a/b/c");
    }

}
