<?php

declare(strict_types=1);

namespace Genkgo\Camt\DTO;

abstract class Account
{
    private ?Owner $owner = null;

    /**
     * @return Owner|null
     */
    public function getOwner(): ?Owner
    {
        return $this->owner;
    }

    /**
     * @param Owner|null $owner
     * @return static
     */
    public function setOwner(?Owner $owner): self
    {
        $this->owner = $owner;

        return $this;
    }

    abstract public function getIdentification(): string;
}
