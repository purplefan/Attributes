<?php
require __DIR__ . '/vendor/autoload.php';

use Purplefan\Attributes\Data\Data;
use Purplefan\Attributes\Service\AppService;

$appService = new AppService();

$data1 = new Data();
        $data1->name = '';
        $data1->account = '1';

var_dump($appService->checkData($data1)); // 3


$data2 = new Data();
        $data2->id = 9;
        $data2->name = 'somename';
        $data2->account = '14567894';

var_dump($appService->checkData($data2)); // 0

$data3 = new Data();
        $data3->id = 9;
        $data3->name = '';
        $data3->account = '1894';

var_dump($appService->checkData($data3)); // 2