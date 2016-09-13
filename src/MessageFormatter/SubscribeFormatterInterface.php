<?php

namespace RHorv\Interfaces\MessageFormatter;

use RHorv\Interfaces\Message\MessageInterface;

interface SubscribeFormatterInterface
{
    /**
     * @param string $message
     * @return MessageInterface $message
     */
    public function format($message);
}