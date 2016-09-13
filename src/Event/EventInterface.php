<?php

namespace RHorv\Interfaces\Event;

use RHorv\Interfaces\Message\MessageInterface;

interface EventInterface extends MessageInterface
{
    /**
     * @return \DateTimeInterface
     */
    public function getOccurredAt();
}