<?php

/**
 * Created by IntelliJ IDEA.
 * Author: sgenmi
 * Date: 2020/5/13 下午6:53
 * Email: 150560159@qq.com
 */

namespace Yaf;


abstract class Config_Abstract implements \Iterator , \ArrayAccess , \Countable {
    /**
     * @var array
     */
    protected $_config;
    /**
     * @var boolean
     */
    protected $_readonly;

    /**
     *
     * @param string|int $name
     * @return mixed
     *
     * @link https://www.php.net/manual/zh/yaf-config-abstract.get.php
     */
    abstract public function get($name);


    /**
     * @link https://www.php.net/manual/zh/yaf-config-abstract.readonly.php
     * @return boolean
     */
    abstract public function readonly();

    /**
     * @param string|int $name
     * @param mixed $value
     * @return mixed
     */
    abstract public function set($name,$value);

    /**
     * @link https://www.php.net/manual/zh/yaf-config-abstract.toarray.php
    */
    abstract public function toArray();

}