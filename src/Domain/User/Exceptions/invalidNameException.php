<?php

namespace Src\Domain\User\Exceptions;

class invalidNameException
{
    public static function doesntHaveFirstAndLastName() {
        throw new \DomainException("Nombre incorrecto");
    }
}
