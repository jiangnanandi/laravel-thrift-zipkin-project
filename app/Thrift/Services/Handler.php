<?php
// +----------------------------------------------------------------------
// | Base.php [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
namespace App\Thrift\Services;

use App\Core\Zipkin\Tracer;
use App\Thrift\Services\Impl\ImplHandler;
use Phalcon\Di\Injectable;
use Xin\Thrift\MicroService\ThriftException;

abstract class Handler extends Injectable
{
    /** @var  ImplHandler */
    protected $impl;

    public function __call($name, $arguments)
    {
        if (empty($this->impl)) {
            throw new ThriftException([
                'code' => 0,
                'message' => '微服务Handler没有设置其实现',
            ]);
        }
        /** @var  ImplHandler */
        $result = $this->impl::getInstance()->$name(...$arguments);

        return $result;
    }
}