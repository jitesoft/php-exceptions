<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  CertificateException.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Security;

use Throwable;

/**
 * Class CertificateException
 *
 * Exception thrown when encountering a certificate problem.
 * Mainly used as a base class for more specific certificate exceptions.
 *
 * @property string|null $certificateName
 */
class CertificateException extends SecurityException {

    /** @var null|string */
    protected $certificateName;

    /**
     * CertificateException constructor.
     * @param null|string $certificateName
     * @param string $message
     * @param int $code
     * @param null|Throwable $previous
     */
    public function __construct(string $message = "Encountered an issue with certificate named '%s'",
                                ?string $certificateName = null,
                                int $code = 0,
                                ?Throwable $previous = null) {

        $this->certificateName = $certificateName;

        parent::__construct(sprintf($message, $certificateName), $code, $previous);
    }

    /**
     * @return null|string
     */
    public function getCertificateName() : ?string {
        return $this->certificateName;
    }

    /**
     * Get the exception as an associative array.
     *
     * <pre>
     * {
     *   'type'             => (string)
     *   'error'            => (string)
     *   'code'             => (int)
     *   'file'             => (string)
     *   'line'             => (int)
     *   'trace'            => (array)
     *   'inner'            => (array)
     *   'certificate_name' => (null|string)
     * }
     * </pre>
     *
     * @return array
     */
    public function toArray() {
        $arr                     = parent::toArray();
        $arr['certificate_name'] = $this->certificateName;
        return $arr;
    }

}
