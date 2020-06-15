<?php

/**
 * Created by IntelliJ IDEA.
 * Author: sgenmi
 * Date: 2020/6/15 上午12:52
 * Email: 150560159@qq.com
 */

namespace Yaf;

/**
 * @link https://www.php.net/manual/zh/class.yaf-router.php
 * Class Router
 * @package Yaf
 */
class Router
{
    protected $_routes ;
    protected $_current ;

    /**
     * @link https://www.php.net/manual/zh/yaf-router.construct.php
     * Router constructor.
     */
    public function __construct(){ }

    /**
     * @link https://www.php.net/manual/zh/yaf-router.addconfig.php
     * @desc cn: application.ini中定义的路由规则添加到Yaf_Router的路由栈中
     * @desc en: Add routes defined by configs into \Yaf\Router's route stack
     * @param Config_Abstract $config
     * @return bool|\Yaf\Router return FALSE on failure
     */
    public function addConfig(\Yaf\Config_Abstract $config){}

    /**
     * @link https://www.php.net/manual/zh/yaf-router.addroute.php
     * @desc cn: 默认地，Yaf_Router使用Yaf_Route_Static作为它的默认的路由。你可以通过调用这个方法往Router的堆栈中添加一个新的路由
     *          在路由栈中，新的路由规则会比老的规则先调用，如果新路由规则返回TRUE，那么路由进程将会结束。否则，老的规则将会被调用。
     * @desc en: by default, \Yaf\Router using a \Yaf\Route_Static as its default route. you can add new routes into router's route stack by calling this method.
     *          the newer route will be called before the older(route stack), and if the newer router return TRUE, the router process will be end. otherwise, the older one will be called.
     *
     * @param string $name
     * @param Route_Interface $route
     * @return bool|\Yaf\Router return FALSE on failure
     */
    public function addRoute($name, \Yaf\Route_Interface $route){}

    /**
     * @link https://www.php.net/manual/zh/yaf-router.getcurrentroute.php
     * @desc cn: 获取当前路由进程中正在起作用的路由名
     * @desc en: Get the name of the route which is effective in the route process
     *
     * @return string
     */
    public function getCurrentRoute(){}

    /**
     * @link https://www.php.net/manual/zh/yaf-router.getroute.php
     * @desc cn: 获取路由规则
     * @param string $name
     * @return \Yaf\Route_Interface
     */
    public function getRoute($name){}

    /**
     * @link https://www.php.net/manual/zh/yaf-router.getroutes.php
     * @return \Yaf\Route_Interface[]
     */
    public function getRoutes(){}

    /**
     * @link https://www.php.net/manual/zh/yaf-router.route.php
     *
     * @param Request_Abstract $request
     * @return bool|\Yaf\Router return FALSE on failure
     */
    public function route(\Yaf\Request_Abstract $request){}


}