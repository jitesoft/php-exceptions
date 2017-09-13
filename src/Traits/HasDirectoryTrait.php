<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HasDirectoryTrait.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Traits;

/**
 * @property string $path
 */
trait HasDirectoryTrait {

    /** @var null|string */
    protected $path = null;

    /**
     * Get the path of the directory.
     *
     * @return null|string
     */
    public function getPath() : ?string {
        return $this->path;
    }
}
