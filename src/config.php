<?php
declare(strict_types=1);
// +----------------------------------------------------------------------
// | CodeEngine
// +----------------------------------------------------------------------
// | Copyright 艾邦
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: TaoGe <liangtao.gz@foxmail.com>
// +----------------------------------------------------------------------
// | Version: 2.0 2021/5/27 17:39
// +----------------------------------------------------------------------

$cpu_num = function_exists("swoole_cpu_num") ? swoole_cpu_num() : 4;

return [
    'debug'  => true,
    'log'    => true,
    'kafka' => [
        'metadata_refresh_interval_ms' => 10000,
        'metadata_broker_list' => '150.158.77.232:9092',
        'broker_version' => '1.0.0',
        'required_ack' => 1,
        'is_asyn' => false,
        'produce_interval' => 500,
    ],
    'mysql'=>[
        'hostname'=>'127.0.0.1',
        'hostport'=>3306,
        'database'=>'V2dmIM',
        'charset'=>'utf8mb4',
        'username'=>'root',
        'password'=>'XReVA1tSyoTIyWP7',
    ],
];
