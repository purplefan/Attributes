<?php

namespace Purplefan\Attributes\Validator;

class Validator {
    public static function validate(object $data): array
    {
        $violations = [];
        $reflector = new \ReflectionClass(get_class($data));
        $props = $reflector->getProperties();

        foreach ($props as $property) {
            $propName = $property->getName();

            $attrs = $property->getAttributes();
            foreach ($attrs as $attribute) {
                /** @var AttributeValidatorInterface */
                $validator = $attribute->newInstance();
                if (!isset($data->$propName)) {
                    $violations[] = $propName . ' ' .  $validator->getValidationMessage();
                } elseif (!$validator->isValid($data->$propName)) {
                    $violations[] = $propName . ' ' .  $validator->getValidationMessage();
                }
            }
        }

        return $violations;
    }
}
