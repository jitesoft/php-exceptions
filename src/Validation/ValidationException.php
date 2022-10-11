<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  ValidationException.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Validation;

use Jitesoft\Exceptions\JitesoftException;
use Throwable;

/**
 * Class ValidationException
 *
 * General validation exception.
 * Mainly used as a base class for more specific validation exception types.
 */
class ValidationException extends JitesoftException {
    protected ?array $errors;

    /**
     * Get list of validation errors.
     *
     * @return array|null
     */
    public function getErrors(): ?array {
        return $this->errors;
    }

    /**
     * ValidationException constructor.
     *
     * @param string         $message
     * @param null|array     $errors
     * @param integer        $code
     * @param null|Throwable $previous
     */
    public function __construct(string $message = 'Validation failed.',
                                ?array $errors = null,
                                int $code = 0,
                                ?Throwable $previous = null) {
        parent::__construct($message, $code, $previous);

        $this->errors = $errors;
    }

    public function toArray(): array {
        $arr           = parent::toArray();
        $arr['errors'] = $this->getErrors();
        return $arr;
    }

}
