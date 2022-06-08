<?php

namespace Src\Domain\User\Contracts;

interface iResetPassword {
    public function resetPassword(string $email, string $password): void;
}
