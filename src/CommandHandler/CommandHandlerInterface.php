<?php

namespace RHorv\Interfaces\CommandHandler;

use RHorv\Interfaces\Command\CommandInterface;
use RHorv\Interfaces\Message\MessageInterface;

interface CommandHandlerInterface
{
    /**
     * @param MessageInterface $command
     * @return CommandInterface
     */
    public function handle(MessageInterface $command);
}