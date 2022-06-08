<?php

namespace Src\Domain\User\ValueObjects;

use Src\Domain\User\Exceptions\invalidPasswordException;

final class passwordValueObject
{
    private $password;

    public function __construct(string $password)
    {
        $this->setPassword($password);
    }

    /**
     * @param mixed $password
     */
    private function setPassword($password): void
    {
        if (strlen($password) < 8) {
            invalidPasswordException::shortPassword();
        }
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }
}
