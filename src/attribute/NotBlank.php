<?php

namespace Purplefan\Attributes\Attribute;

use Attribute;

#[Attribute]
class NotBlank implements AttributeValidatorInterface{
    public function getValidationMessage(): string
    {
        return "Must be not blank";
    }

    public function isValid(mixed $mixed): bool
    {
        if ($mixed === null) {
            return false;
        } 

        return  strlen(trim((string)$mixed)) > 0;
    }
}