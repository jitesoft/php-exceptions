<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpServiceUnavailableException.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Http\Server;

use Jitesoft\Exceptions\Http\HttpException;
use Throwable;

/**
 * Class HttpServiceUnavailableException
 *
 * Server http exception thrown when a request is not possible to be handled.
 *
 * It is recommended to set the retry-after header in the response to allow the client
 * to retry the request after the given time.
 */
class HttpServiceUnavailableException extends HttpException {
    protected ?int $retryAfter;

    /**
     * Retry-After header value which should be set if possible.
     *
     * @return int|null
     */
    public function getRetryAfter(): ?int {
        return $this->retryAfter;
    }

    /**
     * HttpServiceUnavailableException constructor.
     *
     * @param string         $message
     * @param int            $code
     * @param ?int           $retryAfter
     * @param Throwable|null $previous
     */
    public function __construct(
        string $message
            = 'Service is currently not able to handle the request.',
        int $code = 503,
        ?int $retryAfter = null,
        ?Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);

        $this->retryAfter = $retryAfter;
    }

}
