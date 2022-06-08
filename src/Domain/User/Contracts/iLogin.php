<?php

namespace Src\Domain\User\Contracts;

interface iLogin {
    public function login(string $email, string $password);
}
