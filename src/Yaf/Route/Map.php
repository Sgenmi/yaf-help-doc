<?php

/**
 * Created by IntelliJ IDEA.
 * Author: sgenmi
 * Date: 2020/6/15 下午12:42
 * Email: 150560159@qq.com
 */

namespace Yaf\Route;


use Yaf\Request_Abstract;

final class Map implements \Yaf\Route_Interface
{
    /* Properties */
    protected $_ctl_router ;
    protected $_delimiter ;

    /**
     * @link https://www.php.net/manual/zh/yaf-route-map.construct.php
     * Map constructor.
     * @param bool $controller_prefer
     * @param string $delimiter
     */
    public function __construct ($controller_prefer = FALSE , $delimiter = "" ){}

    /**
     * @link https://www.php.net/manual/zh/yaf-route-map.route.php
     *
     * @param Request_Abstract $request
     * @return bool|void
     */
    public function route(Request_Abstract $request){}

    /**
     * @link  https://www.php.net/manual/zh/yaf-route-map.assemble.php
     * @param array $info
     * @param array $query
     */
    public function assemble($info, $query = null){}
}