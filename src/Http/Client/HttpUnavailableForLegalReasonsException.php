<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpUnavailableForLegalReasonsException.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Http\Client;

use Jitesoft\Exceptions\Http\HttpException;
use Throwable;

/**
 * Class HttpUnavailableForLegalReasonsException
 *
 * Client http exception thrown when a requested resource is unavailable
 * due to legal reasons hence can't be served.
 */
class HttpUnavailableForLegalReasonsException extends HttpException {

    private ?string $reason;

    /**
     * Reason for unavailability.
     *
     * @return string|null
     */
    public function getReason(): ?string {
        return $this->reason;
    }

    /**
     * HttpUnavailableForLegalReasonsException constructor.
     *
     * @param string         $message
     * @param string|null    $reason
     * @param int            $code
     * @param Throwable|null $previous
     */
    public function __construct(
        string $message = 'Unavailable for Legal Reasons.',
        ?string $reason = null,
        int $code = 451,
        ?Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);

        $this->reason = $reason;
    }

}
