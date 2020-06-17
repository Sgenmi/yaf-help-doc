<?php

/**
 * Created by IntelliJ IDEA.
 * Author: sgenmi
 * Date: 2020/6/16 下午12:48
 * Email: 150560159@qq.com
 */

namespace Yaf;

/**
 * Class Plugin_Abstract
 * @package Yaf
 * @link https://www.php.net/manual/zh/class.yaf-plugin-abstract.php
 */
abstract class Plugin_Abstract
{

//public routerShutdown ( Yaf_Request_Abstract $request , Yaf_Response_Abstract $response ) : void
//public routerStartup ( Yaf_Request_Abstract $request , Yaf_Response_Abstract $response ) : void

    /**
     * @link https://www.php.net/manual/zh/yaf-plugin-abstract.dispatchloopshutdown.php
     * @desc cn: 这个方式是Yaf插件钩子系统中最后的一个钩子，如果一个用户插件实现了这个方法，它将在分发循环结束之后触发。
     * @desc en: This is the latest hook in Yaf plugin hook system, if a custom plugin implement this method, then it will be called after the dispatch loop finished.
     *
     * @param \Yaf\Request_Abstract $request
     * @param \Yaf\Response_Abstract $response
     * @return true
     */
    public function dispatchLoopShutdown(\Yaf\Request_Abstract $request , \Yaf\Response_Abstract $response){}

    /**
     * @link https://www.php.net/manual/zh/yaf-plugin-abstract.dispatchloopstartup.php
     * @desc cn: 这个钩子将在分发循环开始之前触发。
     * @desc en: This hook will be triggered before the distribution cycle begins
     *
     * @param \Yaf\Request_Abstract $request
     * @param \Yaf\Response_Abstract $response
     * @return true
     */
    public function dispatchLoopStartup(\Yaf\Request_Abstract $request , \Yaf\Response_Abstract $response){}

    /**
     * @link https://www.php.net/manual/zh/yaf-plugin-abstract.postdispatch.php
     *
     * @param \Yaf\Request_Abstract $request
     * @param \Yaf\Response_Abstract $response
     * @return true
     */
    public function postDispatch(\Yaf\Request_Abstract $request , \Yaf\Response_Abstract $response){}

    /**
     * @link https://www.php.net/manual/zh/yaf-plugin-abstract.predispatch.php
     *
     * @param \Yaf\Request_Abstract $request
     * @param \Yaf\Response_Abstract $response
     * @return true
     */
    public function preDispatch(\Yaf\Request_Abstract $request , \Yaf\Response_Abstract $response){}

    /**
     * @link https://www.php.net/manual/zh/yaf-plugin-abstract.preresponse.php
     * @desc cn: 这个钩子在响应(Yaf_Response)前被触发
     * @desc en:  This hook is triggered before the response (\Yaf\Response)
     *
     * @param \Yaf\Request_Abstract $request
     * @param \Yaf\Response_Abstract $response
     * @return true
     */
    public function preResponse(\Yaf\Request_Abstract $request , \Yaf\Response_Abstract $response){}

    /**
     * @link https://www.php.net/manual/zh/yaf-plugin-abstract.routershutdown.php
     * @desc cn: 这个钩子在路由结束之后触发，通常被用于登陆检查。
     * @desc en: This hook will be trigged after the route process finished, this hook is usually used for login check.
     *
     * @param \Yaf\Request_Abstract $request
     * @param \Yaf\Response_Abstract $response
     * @return true
     */
    public function routerShutdown(\Yaf\Request_Abstract $request , \Yaf\Response_Abstract $response){}

    /**
     * @link https://www.php.net/manual/zh/yaf-plugin-abstract.routerstartup.php
     * @desc cn: 这个是Yaf插件的勾子系统最早被触发的的一个方法，如果一个用户插件实现了这个方法，它将在路由之前触发。
     * @desc en: This is the earliest hook in Yaf plugin hook system, if a custom plugin implement this method, then it will be called before routing a request.
     *
     * @param \Yaf\Request_Abstract $request
     * @param \Yaf\Response_Abstract $response
     * @return true
     */
    public function routerStartup(\Yaf\Request_Abstract $request , \Yaf\Response_Abstract $response){}

}