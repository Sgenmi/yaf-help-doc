<?php

/**
 * Created by IntelliJ IDEA.
 * Author: sgenmi
 * Date: 2020/6/15 下午12:43
 * Email: 150560159@qq.com
 */

namespace Yaf\Route;


use Yaf\Request_Abstract;

/**
 * Class Simple
 * @package Yaf\Route
 *
 * @link https://www.php.net/manual/zh/class.yaf-route-simple.php
 */
final class Simple implements \Yaf\Route_Interface
{

    protected $controller ;
    protected $module ;
    protected $action ;

    /**
     * Simple constructor.
     * @param string $module_name
     * @param string $controller_name
     * @param string $action_name
     */
    public function __construct( $module_name,  $controller_name,  $action_name){ }

    /**
     * @link https://www.php.net/manual/zh/yaf-route-simple.route.php
     *
     * @param Request_Abstract $request
     * @return bool|void
     */
    public function route(Request_Abstract $request){}

    /**
     * @link https://www.php.net/manual/zh/yaf-route-simple.assemble.php
     *
     * @param array $info
     * @param null $query
     * @return bool|void
     */
    public function assemble(array $info, $query = null){}
}