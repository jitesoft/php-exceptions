<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpUpgradeRequiredException.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Http\Client;

use Jitesoft\Exceptions\Http\HttpException;
use Throwable;

/**
 * Class HttpUpgradeRequiredException
 *
 * Client http exception thrown when the client should switch protocol.
 * The protocol the user is expected to upgrade to should be sent through a http-upgrade header.
 *
 * @property string $protocol
 */
class HttpUpgradeRequiredException extends HttpException {

    /**
     * @var string
     */
    protected $protocol;

    /**
     * HttpUpgradeRequiredException constructor.
     * @param string         $message
     * @param string         $protocol Protocol the user is expected to upgrade to.
     * @param integer        $code
     * @param null|Throwable $previous
     */
    public function __construct(string $message = 'Upgrade protocol.',
                                string $protocol = 'HTTP/2',
                                int $code = 426,
                                ?Throwable $previous = null) {
        $this->protocol = $protocol;

        parent::__construct($message, $code, $previous);
    }

    /**
     * Get the exception as an associative array.
     *
     * <pre>
     * {
     *   'type'     => (string)
     *   'error'    => (string)
     *   'code'     => (int)
     *   'file'     => (string)
     *   'line'     => (int)
     *   'trace'    => (array)
     *   'inner'    => (array)
     *   'protocol' => (string)
     * }
     * </pre>
     *
     * @return array
     */
    public function toArray() {
        $array             = parent::toArray();
        $array['protocol'] = $this->protocol;
        return $array;
    }

}
