<?php

namespace Purplefan\Attributes\Data;

use Purplefan\Attributes\Attribute\NotBlank;
use Purplefan\Attributes\Attribute\MinLength;

class Data {

    #[NotBlank]
    public int $id;

    #[NotBlank]
    public string $name;

    #[MinLength(5)]
    public string $account;
}