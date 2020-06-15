<?php

/**
 * Created by IntelliJ IDEA.
 * Author: sgenmi
 * Date: 2020/6/15 上午12:26
 * Email: 150560159@qq.com
 */

namespace Yaf\Request;


/**
 * Class Simple
 * @package Yaf\Request
 * @link https://www.php.net/manual/zh/class.yaf-request-simple.php
 */
final class Simple extends \Yaf\Request_Abstract
{
    /**
     * @link https://www.php.net/manual/zh/yaf-request-simple.construct.php
     * Simple constructor.
     * @param string $module
     * @param string $controller
     * @param string $action
     * @param string $method
     * @param array $params
     */
    public function __construct ($module , $controller , $action , $method , array $params = [] ){}

    /**
     *
     * @link https://www.php.net/manual/zh/yaf-request-simple.get.php
     * @desc cn: 从客户端返回变量，这个方法将从请求参数中寻找参数name，如果没有找到的话，将从POST, GET, Cookie, Server中寻找
     * @des en: Retrieve variable from client, this method will search the name in $_REQUEST params,
     * if the name is not found, then will search in $_POST, $_GET, $_COOKIE, $_SERVER
     *
     * @param string $name
     * @param mixed $default
     * @return mixed
     */
    public function get($name,  $default=null){}


    /**
     * @link https://www.php.net/manual/zh/yaf-request-simple.getcookie.php
     *
     * @param string $name
     * @param mixed $default
     * @return mixed
     */
    public function getCookie($name, $default=null){}

    /**
     * @link https://www.php.net/manual/zh/yaf-request-simple.getfiles.php
     *
     * @param string $name
     */
    public function getFiles($name = NULL){}

    /**
     * @link https://www.php.net/manual/zh/yaf-request-simple.getpost.php
     * @desc Retrieve $_POST variable
     *
     * @param string $name
     * @param mixed $default
     * @return mixed
     */
    public function getPost($name=null, $default=null){}

    /**
     * @link https://www.php.net/manual/zh/yaf-request-simple.getquery.php
     * @desc Retrieve $_GET variable
     *
     * @param string $name
     * @param mixed $default
     * @return mixed
     */
    public function getQuery($name=null, $default=null) {}

    /**
     * @link https://www.php.net/manual/zh/yaf-request-simple.getrequest.php
     * @desc Retrieve $_REQUEST variable
     *
     * @return mixed
     */
    public function getRequest(){}


}