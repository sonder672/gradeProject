<?php

namespace Src\Domain\User\ValueObjects;

use Src\Domain\User\Exceptions\invalidIdException;

final class idValueObject
{
    private $id;

    public function __construct(string $id)
    {
        $this->setId($id);
    }

    /**
     * @param string $id
     */
    private function setId(string $id): void
    {
        if(strlen($id) > 11) {
            invalidIdException::invalidIdSize();
        }
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
}
