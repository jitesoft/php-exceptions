<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  UniqueConstraintExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2018
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Database\Entity;

use Jitesoft\Exceptions\Database\Entity\UniqueConstraintException;

class UniqueConstraintExceptionTest extends EntityExceptionTest {

    public function throwDefaultException(): void {
        throw new UniqueConstraintException();
    }

    public function throwMessageException(string $message): void {
        throw new UniqueConstraintException($message, 'TestEntity', 123);
    }

}
