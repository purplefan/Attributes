<?php

namespace Purplefan\Attributes\Attribute;

interface AttributeValidatorInterface {
    public function isValid(mixed $mixed): bool;
    public function getValidationMessage(): string;
}
