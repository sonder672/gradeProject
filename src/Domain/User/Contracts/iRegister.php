<?php

namespace Src\Domain\User\Contracts;

use Src\Domain\User\UserEntity;

interface iRegister {
    public function register(UserEntity $userEntity): void;
}
