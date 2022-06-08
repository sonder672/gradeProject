<?php

namespace Src\Domain\User\ValueObjects;

use Src\Domain\User\Exceptions\invalidNameException;

final class nameValueObject
{
    private $name;

    public function  __construct(string $name)
    {
        $this->setName($name);
    }

    /**
     * @param string $name
     */
    private function setName(string $name): void
    {
        if (!strpos($name, " ")) {
            invalidNameException::doesntHaveFirstAndLastName();
        }
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
