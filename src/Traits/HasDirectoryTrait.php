<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HasDirectoryTrait.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Traits;

/**
 * @property string $path
 */
trait HasDirectoryTrait {
    protected ?string $path = null;

    /**
     * Get the path of the directory.
     *
     * @return null|string
     */
    public function getPath() : ?string {
        return $this->path;
    }

}
