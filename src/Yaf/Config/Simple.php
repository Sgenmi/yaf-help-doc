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
     * @inheritDoc
     */
    public function get($name) { }

    /**
     * @inheritDoc
     */
    public function readonly() { }

    /**
     * @inheritDoc
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
     * @inheritDoc
     */
    public function offsetExists($offset) { }

    /**
     * @inheritDoc
     */
    public function offsetGet($offset) { }

    /**
     * @inheritDoc
     */
    public function offsetSet($offset, $value) { }

    /**
     * @inheritDoc
     */
    public function offsetUnset($offset) { }

    /**
     * @inheritDoc
     */
    public function count() { }
}