<?php

/**
 * Created by IntelliJ IDEA.
 * Author: sgenmi
 * Date: 2020/5/13 下午6:51
 * Email: 150560159@qq.com
 */

namespace Yaf\Config;

class Simple extends \YAF\Config_Abstract implements \Iterator,\ArrayAccess,\Countable {

    /**
     * @param string|int $name
     * @return mixed
     */
    public function get($name) { }

    /**
     * @inheritDoc
     */
    public function readonly() { }

    /**
     * @param string|int $name
     * @param mixed $value
     */
    public function set($name, $value) { }

    /**
     * @inheritDoc
     */
    public function current() { }

    /**
     * @inheritDoc
     */
    public function next() { }

    /**
     * @inheritDoc
     */
    public function key() { }

    /**
     * @inheritDoc
     */
    public function valid() { }

    /**
     * @inheritDoc
     */
    public function rewind() { }

    /**
     * @param string|int $name
     */
    public function offsetExists($name) { }

    /**
     * @param string|int $name
     */
    public function offsetGet($name) { }

    /**
     * @param string|int $name
     * @param mixed $value
     */
    public function offsetSet($name, $value) { }

    /**
     * @param string|int $name
     */
    public function offsetUnset($name) { }

    /**
     * @inheritDoc
     */
    public function count() { }

    /**
     * @inheritDoc
     */
    public function toArray() { }
}