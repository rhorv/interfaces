<?php

namespace RHorv\Interfaces\Message;

interface MessageInterface
{
    /**
     * @return string
     */
    public function getName();

    /**
     * @returns array
     */
    public function getPayload();

    /**
     * @param array $payload
     * @return static
     */
    public static function fromPayload(array $payload);
}