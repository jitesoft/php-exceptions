<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  InvalidGrantException.php - Part of the php-exceptions project.

  © - Jitesoft 2018
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Security\OAuth2;

use Throwable;

/**
 * Class InvalidGrantException
 *
 * Exception thrown when oauth2 fails due to invalid grant.
 *
 * @property string|null $grant
 */
class InvalidGrantException extends OAuth2Exception {

    /** @var null|string */
    protected $grant;

    /**
     * InvalidGrantException constructor.
     * @param string         $message
     * @param string|null    $grant
     * @param integer        $code
     * @param Throwable|null $previous
     */
    public function __construct($message = 'Invalid grant.' ,
                                ?string $grant = '',
                                int $code = 0,
                                ?Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
        $this->grant = $grant;
    }

    /**
     * Get the exception as an associative array.
     *
     * <pre>
     * {
     *   'type'         => (string)
     *   'error'        => (string)
     *   'code'         => (int)
     *   'file'         => (string)
     *   'line'         => (int)
     *   'trace'        => (array)
     *   'inner'        => (array)
     *   'grant'        => (string)
     * }
     * </pre>
     *
     * @return array
     */
    public function toArray() {
        $arr          = parent::toArray();
        $arr['grant'] = $this->grant;
        return $arr;
    }

    /**
     * @return null|string
     */
    public function getGrant(): ?string {
        return $this->grant;
    }

}
