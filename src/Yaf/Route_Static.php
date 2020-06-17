<?php

/**
 * Created by IntelliJ IDEA.
 * Author: sgenmi
 * Date: 2020/6/16 下午12:50
 * Email: 150560159@qq.com
 */

namespace Yaf;


class Route_Static implements \Yaf\Route_Interface
{

    /**
     * @link https://www.php.net/manual/zh/yaf-route-static.route.php
     *
     * @param Request_Abstract $request
     * @return bool|void
     */
    public function route(Request_Abstract $request){}

    /**
     * @link https://www.php.net/manual/zh/yaf-route-static.match.php
     *
     * @param string $uri
     * @return bool
     */
    public function match($uri){}

    /**
     * @link https://www.php.net/manual/zh/yaf-route-static.assemble.php
     * @desc cn: 组合成一个url
     * @desc en: Assemble a url
     *
     * @param array $info
     * @param array $query
     * @return bool|void
     */
    public function assemble(array $info, $query = null){}
}