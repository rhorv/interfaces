<?php


namespace RHorv\Interfaces\Validator;

interface ConstraintViolationListInterface extends \IteratorAggregate, \Countable
{
    /**
     * @param ConstraintViolationInterface $violation
     * @return void
     */
    public function add(ConstraintViolationInterface $violation);

    /**
     * @param $offset
     * @return ConstraintViolationInterface
     */
    public function get($offset);
}