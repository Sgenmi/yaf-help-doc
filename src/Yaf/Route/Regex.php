<?php

/**
 * Created by IntelliJ IDEA.
 * Author: sgenmi
 * Date: 2020/6/15 下午12:42
 * Email: 150560159@qq.com
 */

namespace Yaf\Route;

final class Regex extends \Yaf\Router implements \Yaf\Route_Interface
{
    protected $_route ;
    protected $_default ;
    protected $_maps ;
    protected $_verify ;


    /**
     * @link https://www.php.net/manual/zh/yaf-route-regex.construct.php
     * Regex constructor.
     * @param string $match  A complete Regex pattern, will be used to match a request uri, if doesn't matched, \Yaf\Route\Regex will return FALSE.
     * [一个完整的正则表达式，用来匹配一个请求的uri，如果不能匹配，Yaf_Route_Regex 将返回FALSE]
     * @param array $route <p>When the match pattern matches the request uri, \Yaf\Route\Regex will use this to decide which m/c/a to routed.</p>
     * <br/>
     * <p>either of m/c/a in this array is optional, if you don't assign a specific value, it will be routed to default.</p>
     * [当路由正则匹配成功请求uri时，Yaf_Route_Regex将会用它来决定哪一个m/c/a被路由。在这个数组中无论是m/c/a都是最优的，如果你没有提供一个明确的值，它将会以默认方式被路由。 另外, 你也可以使用map的结果作为m/c/a的结果.]
     * @param array $map A array to assign name to the captures in the match result.
     * [将匹配到的结果捕捉放到一个已经命名好的数组中]
     * @param array $verify
     */
    public function __construct (string $match , array $route , array $map , array $verify){}

    /**
     * @link https://www.php.net/manual/zh/yaf-route-regex.assemble.php
     *
     * @param array $info
     * @param array $query
     * @return bool
     */
    public function assemble(array $info, $query = null){}
}