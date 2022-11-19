<?php

namespace App\Exception;

use SymfonyCasts\Bundle\VerifyEmail\VerifyEmailExceptionInterface;

final class VerifyEmailException extends \Exception implements VerifyEmailExceptionInterface {

    public function getReason() : String {
        return 'Your email could not be verified. ';
    }

}
