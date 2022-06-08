<?php

namespace Src\Domain\User;

use Src\Domain\User\ValueObjects\emailValueObject;
use Src\Domain\User\ValueObjects\idValueObject;
use Src\Domain\User\ValueObjects\nameValueObject;
use Src\Domain\User\ValueObjects\passwordValueObject;

final class UserEntity
{
    private $id;
    private $uuidRole;
    private $idDepartment;
    private $idMunicipality;
    private $name;
    private $email;
    private $password;

    public function  __construct(idValueObject $id, nameValueObject $name, emailValueObject $email, passwordValueObject $password, string $uuidRole, int $idDepartment, int $idMunicipality)
    {
        $this->id = $id->getId();
        $this->name = $name->getName();
        $this->email = $email->getEmail();
        $this->password = $password->getPassword();
        $this->uuidRole = $uuidRole;
        $this->idDepartment = $idDepartment;
        $this->idMunicipality = $idMunicipality;
    }

    /**
     * @return idValueObject
     */
    public function getId(): idValueObject
    {
        return $this->id;
    }

    /**
     * @return nameValueObject
     */
    public function getName(): nameValueObject
    {
        return $this->name;
    }

    /**
     * @return emailValueObject
     */
    public function getEmail(): emailValueObject
    {
        return $this->email;
    }

    /**
     * @return passwordValueObject
     */
    public function getPassword(): passwordValueObject
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getUuidRole(): string
    {
        return $this->uuidRole;
    }

    /**
     * @return int
     */
    public function getIdDepartment(): int
    {
        return $this->idDepartment;
    }

    /**
     * @return int
     */
    public function getIdMunicipality(): int
    {
        return $this->idMunicipality;
    }
}
