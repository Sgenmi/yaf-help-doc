<?php

/**
 * Created by IntelliJ IDEA.
 * Author: sgenmi
 * Date: 2020/6/16 下午12:49
 * Email: 150560159@qq.com
 */

namespace Yaf;

/**
 * Class Registry
 * @package Yaf
 * @link https://www.php.net/manual/zh/class.yaf-registry.php
 */
final class Registry
{
    /**
     * @var \Yaf\Registry
     */
    static $_instance ;
    /**
     * @var array
     */
    protected $_entries ;

    private function __construct(){ }

    /**
     * @link https://www.php.net/manual/zh/yaf-registry.del.php
     * @desc cn: 删除存在于注册表中的一个项目
     * @desc en: Remove an item from registry
     *
     * @param string $name
     * @return bool
     */
    public static function del($name){}

    /**
     * @link https://www.php.net/manual/zh/yaf-registry.get.php
     * @desc cn: 获取注册表中寄存的项
     * @desc en: Retrieve an item from registry
     *
     * @param string $name
     * @return mixed
     */
    public static function get($name){}

    /**
     * @link https://www.php.net/manual/zh/yaf-registry.has.php
     * @desc cn: 查询某一项目是否存在于注册表中
     * @desc en: Check whether an item exists
     *
     * @param string $name
     * @return bool
     */
    public static function has($name){}

    /**
     * @link https://www.php.net/manual/zh/yaf-registry.set.php
     * @desc cn: 往全局注册表添加一个新的项
     * @desc en: Add an item into registry
     *
     * @param string $name
     * @param mixed $value
     * @return bool
     */
    public static function set($name,$value){}



}