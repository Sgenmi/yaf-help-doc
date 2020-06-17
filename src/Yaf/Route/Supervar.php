<?php

/**
 * Created by IntelliJ IDEA.
 * Author: sgenmi
 * Date: 2020/6/15 下午12:43
 * Email: 150560159@qq.com
 */

namespace Yaf\Route;


use Yaf\Request_Abstract;

final class Supervar implements \Yaf\Route_Interface
{

    /**
     * @var string
     */
    protected $_var_name;

    /**
     * @link https://www.php.net/manual/zh/yaf-route-supervar.construct.php
     *
     * Supervar constructor.
     * @param string $supervar_name
     */
    public function __construct( $supervar_name){ }


    /**
     * @link https://www.php.net/manual/zh/yaf-route-supervar.route.php
     *
     * @param Request_Abstract $request
     * @return bool|void
     */
    public function route(Request_Abstract $request){}


    /**
     * @link https://www.php.net/manual/zh/yaf-route-supervar.assemble.php
     *
     * @param array $info
     * @param null $query
     * @return bool|void
     */
    public function assemble(array $info, $query = null) {}
}