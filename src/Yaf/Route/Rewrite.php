<?php

/**
 * Created by IntelliJ IDEA.
 * Author: sgenmi
 * Date: 2020/6/15 下午12:42
 * Email: 150560159@qq.com
 */

namespace Yaf\Route;

/**
 * Class Rewrite
 * @package Yaf\Route
 * @link https://www.php.net/manual/zh/class.yaf-route-rewrite.php
 */
class Rewrite extends \Yaf\Router implements \Yaf\Route_Interface
{
    protected $_route ;
    protected $_default ;
    protected $_verify ;

    /**
     * @link https://www.php.net/manual/zh/yaf-route-rewrite.construct.php
     * Rewrite constructor.
     * @param string $match  A pattern, will be used to match a request uri, if doesn't matched, \Yaf\Route\Rewrite will return FALSE.
     * [一个类似正则表达式，会被用来匹配一个请求的uri，如果匹配失败，Yaf_Route_Rewrite 会返回FALSE。]
     * @param array $route <p>When the match pattern matches the request uri, \Yaf\Route\Rewrite will use this to decide which m/c/a to routed.</p>
     * <br/>
     * <p>either of m/c/a in this array is optional, if you don't assign a specific value, it will be routed to default.</p>
     * [当路由正则匹配成功请求uri时，Yaf_Route_Rewrite 将会用它来决定哪一个m/c/a被路由。 在这个数组中无论是m/c/a都是最优的，如果你没有提供一个明确的值，它将会以默认方式被路由。]
     * @param array|null $verify
     */
    public function __construct(string $match, array $route, array $verify = null){}

    /**
     * @link https://www.php.net/manual/zh/yaf-route-rewrite.assemble.php
     * @param array $info
     * @param array $query
     */
    public function assemble(array $info, $query = null) { }
}