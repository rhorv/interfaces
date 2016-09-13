<?php

namespace RHorv\Interfaces\MessageFormatter;

use RHorv\Interfaces\Message\MessageInterface;

interface PublishFormatterInterface
{
    /**
     * @param MessageInterface $message
     * @return string
     */
    public function format(MessageInterface $message);
}