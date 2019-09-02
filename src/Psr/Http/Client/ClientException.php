<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  ClientException.php - Part of the php-exceptions project.

  © - Jitesoft 2018
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Psr\Http\Client;

use Jitesoft\Exceptions\JitesoftException;
use Psr\Http\Client\ClientExceptionInterface;
use Throwable;

class ClientException extends JitesoftException implements ClientExceptionInterface {

    public function __construct(string $message = 'Unexpected HttpClient exception.',
                                int $code = 0,
                                ?Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }

}
