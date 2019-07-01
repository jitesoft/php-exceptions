<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  AssertionException.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Assertion;

use Jitesoft\Exceptions\JitesoftException;
use Throwable;

/**
 * Class AssertionException
 *
 * Exception thrown due to failed assertion.
 *
 * @property string $actual
 * @property string $expected
 */
class AssertionException extends JitesoftException {

    /** @var string */
    protected $actual;
    /** @var string */
    protected $expected;

    public function __construct(string $message = 'Assertion failed %s is not %s.',
                                 string $actual = '',
                                 string $expected = '',
                                 int $code = 0,
                                 ?Throwable $previous = null) {
        $this->actual   = $actual;
        $this->expected = $expected;

        parent::__construct(sprintf($message, $actual, $expected), $code, $previous);
    }

    /**
     * Get the exception as an associative array.
     *
     * <pre>
     * {
     *   'type'      => (string)
     *   'error'     => (string)
     *   'code'      => (int)
     *   'file'      => (string)
     *   'line'      => (int)
     *   'trace'     => (array)
     *   'inner'     => (array)
     *   'actual'    => (string)
     *   'expected'  => (string)
     * }
     * </pre>
     *
     * @return array
     */
    public function toArray() {
        $arr             = parent::toArray();
        $arr['actual']   = $this->actual;
        $arr['expected'] = $this->expected;
        return $arr;
    }

    /**
     * @return string
     */
    public function getActual(): string {
        return $this->actual;
    }

    /**
     * @return string
     */
    public function getExpected(): string {
        return $this->expected;
    }

}
