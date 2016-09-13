<?php

namespace RHorv\Interfaces\Validator;

interface ValidatorInterface
{
    /**
     * @param $object
     * @param array $groups
     * @return ConstraintViolationListInterface
     */
    public function validate($object, $groups = array());
}