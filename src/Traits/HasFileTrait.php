<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HasFileTrait.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Traits;

/**
 * @property string fileName
 */
trait HasFileTrait {
    protected ?string $fileName;

    /**
     * Get the file name of the file with issues.
     *
     * @return null|string
     */
    public function getFileName() : ?string {
        return $this->fileName;
    }

}
