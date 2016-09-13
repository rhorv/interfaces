<?php

namespace RHorv\Interfaces\MessageConsumer;

use RHorv\Interfaces\MessageHandler\MessageHandlerInterface;

interface MessageConsumerInterface
{
    /**
     * @param MessageHandlerInterface $handler
     * @return void
     */
    public function process(MessageHandlerInterface $handler);
}
