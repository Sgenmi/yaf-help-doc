<?php

/**
 * Created by IntelliJ IDEA.
 * Author: sgenmi
 * Date: 2020/6/16 下午12:51
 * Email: 150560159@qq.com
 */

namespace Yaf;


final class Session implements \Iterator, \Traversable,\ArrayAccess,\Countable
{

    /**
     * @var \Yaf\Session
     */
    protected static $_instance ;
    /**
     * @var array
     */
    protected $_session ;
    /**
     * @var bool
     */
    protected $_started ;

    private function __construct(){ }

    /**
     * @param string $name
     */
    public function __get ($name ) {}

    /**
     * @param string $name
     * @param mixed $name
     * @return bool
     */
    public function __set ($name,$value) {}

    /**
     * @param $name
     */
    public function __isset($name){}

    /**
     * @param $name
     */
    public function __unset($name){}

    /**
     * @link https://www.php.net/manual/zh/yaf-session.del.php
     *
     * @param string $name
     * @return bool
     */
    public function del($name){}

    /**
     * @link https://www.php.net/manual/zh/yaf-session.getinstance.php
     *
     * @return \Yaf\Session
     */
    public function getInstance(){}

    /**
     * @link https://www.php.net/manual/zh/yaf-session.has.php
     * @param $name
     * @return bool
     */
    public function has($name){}


    /**
     * @link https://www.php.net/manual/zh/yaf-session.start.php
     *
     * @return bool
     */
    public function start(){}

    /**
     * @param $name
     * @return mixed
     */
    public function get($name){}

    /**
     * @param string $name
     * @param mixed $vaule
     * @return bool
     */
    public function set($name, $vaule){}


    public function current(){}

    public function next(){}

    public function key(){}

    public function valid(){}

    public function rewind(){}

    public function offsetExists($offset){}

    public function offsetGet($offset){}

    public function offsetSet($offset, $value){}

    public function offsetUnset($offset){}

    public function count(){}
}