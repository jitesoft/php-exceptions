<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  OutOfBoundsException.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Logic;

use Jitesoft\Exceptions\JitesoftException;
use Throwable;

/**
 * Class OutOfBoundsException
 *
 * Exception thrown when a list or similar goes out of bounds.
 *
 * @property int $index
 * @property int $size
 */
class OutOfBoundsException extends JitesoftException {

    /** @var integer|null */
    protected $index;
    /** @var integer|null */
    protected $size;

    /**
     * OutOfBoundsException constructor.
     * @param string         $message
     * @param integer|null   $index
     * @param integer|null   $size
     * @param integer        $code
     * @param null|Throwable $previous
     */
    public function __construct(string $message = 'Index is out of bounds.',
                                 ?int $index = null,
                                 ?int $size = null,
                                 int $code = 0,
                                 ?Throwable $previous = null) {
        $this->index = $index;
        $this->size  = $size;

        parent::__construct($message, $code, $previous);
    }

    /**
     * Get the exception as an associative array.
     *
     * <pre>
     * {
     *   'type'  => (string)
     *   'error' => (string)
     *   'code'  => (int)
     *   'file'  => (string)
     *   'line'  => (int)
     *   'trace' => (array)
     *   'inner' => (array)
     *   'index' => (int)
     *   'size'  => (int)
     * }
     * </pre>
     *
     * @return array
     */
    public function toArray() {
        $arr          = parent::toArray();
        $arr['index'] = $this->index;
        $arr['size']  = $this->size;
        return $arr;
    }

    /**
     * @return integer|null
     */
    public function getIndex() {
        return $this->index;
    }

    /**
     * @return integer|null
     */
    public function getSize() {
        return $this->size;
    }

}
