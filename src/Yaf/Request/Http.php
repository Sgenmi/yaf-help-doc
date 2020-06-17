<?php

/**
 * Created by IntelliJ IDEA.
 * Author: sgenmi
 * Date: 2020/6/15 上午12:21
 * Email: 150560159@qq.com
 */

namespace Yaf\Request;

/**
 * Class Http
 * @package Yaf\Request
 * @link https://www.php.net/manual/zh/class.yaf-request-http.php
 */
final class Http extends \Yaf\Request_Abstract
{


    /**
     * @link https://www.php.net/manual/zh/yaf-request-http.construct.php
     * @param string $request_uri
     * @param string $base_uri
     */
    public function __construct ($request_uri = NULL , $base_uri = NULL ){}

    /**
     *
     * @link https://www.php.net/manual/zh/yaf-request-http.get.php
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
     * @link https://www.php.net/manual/zh/yaf-request-http.getcookie.php
     *
     * @param string $name
     * @param mixed $default
     * @return mixed
     */
    public function getCookie($name, $default=null){}

    /**
     * @link https://www.php.net/manual/zh/yaf-request-http.getfiles.php
     *
     * @param string $name
     */
    public function getFiles($name = NULL){}

    /**
     * @link https://www.php.net/manual/zh/yaf-request-http.getpost.php
     * @desc Retrieve $_POST variable
     *
     * @param string $name
     * @param mixed $default
     * @return mixed
     */
    public function getPost($name=null, $default=null){}

    /**
     * @link https://www.php.net/manual/zh/yaf-request-http.getquery.php
     * @desc Retrieve $_GET variable
     *
     * @param string $name
     * @param mixed $default
     * @return mixed
     */
    public function getQuery($name=null, $default=null) {}

    /**
     * @link https://www.php.net/manual/zh/yaf-request-http.getraw.php
     * @desc Retrieve Raw request body
     *
     * @return mixed
     */
    public function getRaw(){}

    /**
     * @link https://www.php.net/manual/zh/yaf-request-http.getrequest.php
     * @desc Retrieve $_REQUEST variable
     *
     * @return mixed
     */
    public function getRequest(){}


}