<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  DuplicateEntityExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Database\Entity;

use Jitesoft\Exceptions\Database\Entity\DuplicateEntityException;
use Jitesoft\Exceptions\JitesoftException;

class DuplicateEntityExceptionTest extends EntityExceptionTest {

    protected function getDefaultException(): JitesoftException {
        return new DuplicateEntityException();
    }

    public function getMessageException(string $message): JitesoftException {
        throw new DuplicateEntityException($message, "TestEntity", 123);
    }


}
