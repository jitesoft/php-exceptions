<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  DuplicateEntityExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Database\Entity;

use Jitesoft\Exceptions\Database\Entity\DuplicateEntityException;

class DuplicateEntityExceptionTest extends EntityExceptionTest {

    protected function throwDefaultException() {
        throw new DuplicateEntityException();
    }

    public function throwMessageException(string $message) {
        throw new DuplicateEntityException($message, "TestEntity", 123);
    }


}
