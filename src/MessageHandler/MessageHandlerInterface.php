<?php

namespace RHorv\Interfaces\MessageHandler;

use RHorv\Interfaces\Message\MessageInterface;

interface MessageHandlerInterface
{
    /**
     * @param MessageInterface $message
     */
    public function handle(MessageInterface $message);

}