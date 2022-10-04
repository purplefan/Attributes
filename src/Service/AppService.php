<?php

namespace Purplefan\Attributes\Service;

use Purplefan\Attributes\Data\Data;
use Purplefan\Attributes\Validator\Validator;

class AppService {
    
    public function checkData(Data $data): array
    {
        return Validator::validate($data);
    }
}
