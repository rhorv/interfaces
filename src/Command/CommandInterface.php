<?php

namespace RHorv\Interfaces\Command;

use RHorv\Interfaces\Message\MessageInterface;

interface CommandInterface extends MessageInterface
{
    /**
     * @return \DateTimeInterface
     */
    public function getDeliveryDate();

    /**
     * @return \DateTimeInterface
     */
    public function getSubmittedAt();
}