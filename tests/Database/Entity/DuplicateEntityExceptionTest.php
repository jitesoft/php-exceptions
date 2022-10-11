<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  DuplicateEntityExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Database\Entity;

use Jitesoft\Exceptions\Database\Entity\DuplicateEntityException;

class DuplicateEntityExceptionTest extends EntityExceptionTest {

    protected function throwDefaultException(): void {
        throw new DuplicateEntityException();
    }

    public function throwMessageException(string $message): void {
        throw new DuplicateEntityException($message, "TestEntity", 123);
    }


}
