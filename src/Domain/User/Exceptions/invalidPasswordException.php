<?php

namespace Src\Domain\User\Exceptions;

class invalidPasswordException
{
    public static function shortPassword() {
        throw new \DomainException("Contraseña incorrecta");
    }
}
