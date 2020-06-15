<?php

/**
 * Created by IntelliJ IDEA.
 * Author: sgenmi
 * Date: 2020/6/15 下午7:00
 * Email: 150560159@qq.com
 */

namespace Yaf;


abstract class Action_Abstract extends \Yaf\Controller_Abstract
{
    /**
     * @var \Yaf\Controller_Abstract
     */
    protected $_controller ;

    /**
     * @link https://www.php.net/manual/zh/yaf-action-abstract.execute.php
     * @desc cn:执行动作
     *
     * @param mixed ... unlimited number of arguments
     * @return mixed
     */
    public function execute(){}

    /**
     * @link https://www.php.net/manual/zh/yaf-action-abstract.getcontroller.php
     * @desc cn: 得到控制器实例
     * @desc en: retrieve current controller object.
     *
     * @return \Yaf\Controller_Abstract
     */
    public function getController(){}

    /**
     * @link https://www.php.net/manual/zh/yaf-controller-abstract.getcontrollername.php
     * @desc cn: 获取控制器名称
     * @desc en: Get controller name
     *
     * @return string
     */
    public function getControllerName(){}

}