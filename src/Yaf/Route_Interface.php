<?php

/**
 * Created by IntelliJ IDEA.
 * Author: sgenmi
 * Date: 2020/6/15 上午12:55
 * Email: 150560159@qq.com
 */

namespace Yaf;


interface Route_Interface
{

    /**
     * @link https://www.php.net/manual/zh/yaf-route-interface.route.php
     * @desc cn: 用户自定义路由唯一需要实现的方法
     * @desc en:\Yaf\Route_Interface::route() is the only method that a custom route should implement.
     * @param Request_Abstract $request
     * @return bool
     */
    public function route(\Yaf\Request_Abstract $request);

    /**
     * @link https://www.php.net/manual/zh/yaf-route-interface.assemble.php
     * @desc cn: 指定的参数加上自定义的参数组合成一个url 所有route必须结合其路由规则来实现这个方法
     * @param array $info
     * @param array $query
     * @return bool
     */
    public function assemble(array $info, $query = null);

}