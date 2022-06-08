<?php

namespace Src\Domain\User\ValueObjects;

use Src\Domain\User\Exceptions\invalidEmailException;

final class emailValueObject
{
    private $email;

    public function  __construct(string $email)
    {
        $this->setEmail($email);
    }

    /**
     * @param string $email
     */
    private function setEmail(string $email): void
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            invalidEmailException::mailWithoutExtension();
        }
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
}
