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
// | Version: 2.0 2021/11/17 11:25
// +----------------------------------------------------------------------
namespace V2dmIM\Handle;

use Throwable;
use V2dmIM\Core\etcd\Register;
use V2dmIM\Core\etcd\Schema;
use V2dmIM\Core\utils\log\Log;
use V2dmIM\Handle\utils\abs\Etcd;

class Auth extends Etcd
{

    public function registerEtcd(): void
    {
        $ip = '127.0.0.1';
        $port = 10120;
        Log::info("Auth service registration succeeded, ip: $ip port: $port");
        $this->register = new Register('etcd:2379', 'v3beta');
        try {
            $this->register->register(Schema::AUTH(), $ip, $port, 3);
        } catch (Throwable $e) {
            Log::error($e->getMessage());
        }
    }

    public function __construct()
    {

    }

}
