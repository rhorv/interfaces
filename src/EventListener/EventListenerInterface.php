<?php

namespace RHorv\Interfaces\EventListener;

use RHorv\Interfaces\Message\MessageInterface;

interface EventListenerInterface
{
    /**
     * @param MessageInterface $event
     */
    public function handle(MessageInterface $event);
}