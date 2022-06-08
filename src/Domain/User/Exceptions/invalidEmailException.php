<?php

namespace Src\Domain\User\Exceptions;

class invalidEmailException extends \DomainException
{
    public static function mailWithoutExtension() {
    throw new \DomainException("Correo electrónico inválido");
    }
}
