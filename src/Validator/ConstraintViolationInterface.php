<?php


namespace RHorv\Interfaces\Validator;


interface ConstraintViolationInterface
{
    /**
     * @return string
     */
    public function getMessage();

    /**
     * @return mixed
     */
    public function getInvalidValue();

    /**
     * @return mixed
     */
    public function getCode();

    /**
     * @return string
     */
    public function getPropertyPath();
}