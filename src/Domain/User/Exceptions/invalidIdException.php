<?php

namespace Src\Domain\User\Exceptions;

class invalidIdException
{
    public static function invalidIdSize() {
        throw new \DomainException("Identificación inválida");
    }
}
