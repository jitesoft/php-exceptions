<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpServiceUnavailableException.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Http\Server;

use Throwable;

/**
 * Class HttpServiceUnavailableException
 *
 * Server http exception thrown when a request is not possible to be handled.
 *
 * It is recommended to set the retry-after header in the response to allow the client
 * to retry the request after the given time.
 */
class HttpServiceUnavailableException extends HttpServerException {
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
     * @param ?int           $retryAfter
     * @param int            $code
     * @param Throwable|null $previous
     */
    public function __construct(
        string $message
            = 'Service is currently not able to handle the request.',
        ?int $retryAfter = null,
        int $code = 503,
        ?Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);

        $this->retryAfter = $retryAfter;
    }

    public function toArray(): array {
        $arr                = parent::toArray();
        $arr['retry-after'] = $this->getRetryAfter();
        return $arr;
    }

}
