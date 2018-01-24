<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  InvalidScopeException.php - Part of the php-exceptions project.

  © - Jitesoft 2018
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Security\OAuth2;

use Throwable;

/**
 * Class InvalidScopeException
 *
 * Exception thrown when oauth2 fails due to a invalid scope.
 *
 * @property string $scope
 */
class InvalidScopeException extends OAuth2Exception {

    protected $scope;

    /**
     * InvalidScopeException constructor.
     * @param string $message
     * @param null|string $scope
     * @param int $code
     * @param null|Throwable $previous
     */
    public function __construct($message = "Invalid scope.",
                                 ?string $scope = null,
                                 int $code = 0,
                                 ?Throwable $previous = null) {
        parent::__construct($message, $code, $previous);

        $this->scope = $scope;
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
     *   'scope'        => (string)
     * }
     * </pre>
     *
     * @return array
     */
    public function toArray() {
        $arr          = parent::toArray();
        $arr['scope'] = $this->scope;
        return $arr;
    }

    /**
     * @return null|string
     */
    public function getScope(): ?string {
        return $this->scope;
    }
}
