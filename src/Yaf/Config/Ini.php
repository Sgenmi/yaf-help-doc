<?php

/**
 * Created by IntelliJ IDEA.
 * Author: sgenmi
 * Date: 2020/5/13 下午6:16
 * Email: 150560159@qq.com
 */

namespace Yaf\Config;


final class Ini extends \Yaf\Config_Abstract implements \Iterator, \ArrayAccess, \Countable{


    /**
     * Ini constructor.
     * @param string $config_file
     * @param string $section
     * @link  https://www.php.net/manual/zh/yaf-config-ini.construct.php
     */
    public function __construct ($config_file , $section =null ) { }

    /**
     * @param $name
     * @link https://www.php.net/manual/zh/yaf-config-ini.get.php
     */
    public function __get ($name ) { }

    /**
     * @param $name
     * @link https://www.php.net/manual/zh/yaf-config-ini.isset.php
     */
    public function __isset($name) { }

    /**
     * @inheritDoc
     */
    public function key() { }

    /**
     * @inheritDoc
     */
    public function next() { }

    /**
     * @inheritDoc
     */
    public function current() { }

    /**
     * @param string|int $name
     * @link https://www.php.net/manual/zh/yaf-config-ini.offsetexists.php
     */
    public function offsetExists($name) { }

    /**
     * @param string|int $name
     * @link https://www.php.net/manual/zh/yaf-config-ini.offsetget.php
     */
    public function offsetGet($name) { }

    /**
     * @param string|int $name
     * @param string $value
     * @link https://www.php.net/manual/zh/yaf-config-ini.offsetset.php
     */
    public function offsetSet($name, $value) { }

    /**
     * @param string|int $name
     * @link https://www.php.net/manual/zh/yaf-config-ini.offsetunset.php
     */
    public function offsetUnset($name) { }

    /**
     * @link https://www.php.net/manual/zh/yaf-config-ini.readonly.php
     */
    public function readonly() {}

    /**
     * @link https://www.php.net/manual/zh/yaf-config-ini.rewind.php
     */
    public function rewind() { }

    /**
     * @param string|int $name
     * @param mixed $value
     *
     * @link https://www.php.net/manual/zh/yaf-config-ini.set.php
     */
    public function __set($name, $value) {}

    /**
     * @link https://www.php.net/manual/zh/yaf-config-ini.toarray.php
     */
    public function toArray() {}

    /**
     * @inheritDoc
     */
    public function valid() { }

    /**
     * @inheritDoc
     */
    public function count() { }

    /**
     * @param string $name
     *
     * @link https://www.php.net/manual/zh/yaf-config-abstract.get.php
     */
    public function get($name) { }

    /**
     * @param string|int $name
     * @param mixed $value
     *
     * @link https://www.php.net/manual/zh/yaf-config-abstract.set.php
     */
    public function set($name, $value) { }
}