<?php

namespace Purplefan\Attributes\Attribute;

use Attribute;

#[Attribute]
class MinLength implements AttributeValidatorInterface {

    private int $min;

    public function __construct(int $min)
    {
        $this->min = $min;
    }

    public function getValidationMessage(): string
    {
        return "Must be longer than ". ($this->min - 1) ;
    }

    public function isValid(mixed $mixed): bool
    {
        if ($mixed === null) {
            return false;
        } 

        return  strlen((string)$mixed) > $this->min;
    }
}