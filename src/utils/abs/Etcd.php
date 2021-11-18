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
// | Version: 2.0 2021/11/17 10:40
// +----------------------------------------------------------------------
namespace V2dmIM\Handle\utils\abs;

use V2dmIM\Core\etcd\Register;

abstract class Etcd
{
    public ?Register $register = null;

    abstract function registerEtcd(): void;
}
