<?php

/**
 * Created by IntelliJ IDEA.
 * Author: sgenmi
 * Date: 2020/6/15 下午2:32
 * Email: 150560159@qq.com
 */

namespace Yaf\View;

/**
 * Class Simple
 * @package Yaf\View
 * @desc  Yaf_View_Simple is final class now ,custom view engin should implements Yaf_View_Interface [yaf>=3.2.0]
 */
final class Simple implements \Yaf\View_Interface
{

    /**
     * @var array
     */
    protected $_tpl_vars ;
    /**
     * @var string
     */
    protected $_tpl_dir ;
    /**
     * @var array
     */
    protected $_options;


    /**
     * @link https://www.php.net/manual/zh/yaf-view-simple.construct.php
     * Simple constructor.
     * @param string $template_dir The base directory of the templates, by default, it is APPLICATION . "/views" for Yaf.
     * [模板的基本路劲，默认为APPLICATOIN . "/views"]
     * @param array|null $options
     */
    public function __construct($template_dir, array $options = null) {}

    /**
     * @link https://www.php.net/manual/zh/yaf-view-simple.get.php
     * @desc cn: 获取视图引擎的一个模板变量值
     * @desc en: Retrieve assigned variable
     *
     * @param string|null $name the assigned variable name,if this is empty, all assigned variables will be returned
     * [变量名，如果为空，则返回所有变量参数]  yaf>2.1.11 参数可以为空
     * @return mixed
     */
    public function __get($name = null){}


    /**
     * @link https://www.php.net/manual/zh/yaf-view-simple.isset.php
     * @param string $name
     */
    public function __isset($name){}


    /**
     * @link https://www.php.net/manual/zh/yaf-view-simple.set.php
     * @desc cn: 为视图引擎分配一个模板变量
     * @desc en: Assign values to View engine
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value){}

    /**
     * @link http://www.php.net/manual/zh/yaf-view-interface.assign.php
     * @desc cn: 为视图引擎分配一个模板变量, 在视图模板中可以直接通过${$name}获取模板变量值
     * @desc en: Assign values to View engine, then the value can access directly by name in template.
     *
     * @param string $name
     * @param mixed $value
     * @return bool
     */
    public function assign($name, $value){}

    /**
     * @link https://www.php.net/manual/zh/yaf-view-simple.assignref.php
     * @desc cn: 不同于Yaf_View_Simple::assign()，这个方法传递一个引用变量给模板引擎
     * @desc en: unlike \Yaf\View\Simple::assign(), this method assign a ref value to engine
     * @param $name
     * @param $value
     * @return  bool
     */
    public function assignRef($name, &$value){}


    /**
     * @link https://www.php.net/manual/zh/yaf-view-simple.clear.php
     * @desc cn: 清除指定的变量,如果不指定参数，则清空所有
     * @desc en: Clear Assigned values , if empty, will clear all assigned variables.
     * @param string $name
     * @return bool
     */
    public function clean($name = null){}

    /**
     * @link https://www.php.net/manual/zh/yaf-view-simple.display.php
     * @desc cn: 渲染一个视图模板, 并直接输出给请求端
     * @desc en: Render a template and output the result immediately.
     *
     * @param string $tpl
     * @param array $tpl_vars
     * @return bool
     */
    function display($tpl, array $tpl_vars = null){}

    /**
     * @link https://www.php.net/manual/zh/yaf-view-simple.getscriptpath.php
     * @desc cn: 获取模板目录
     * @desc en: Get the templates base directory
     * @return string
     */
    function getScriptPath(){}

    /**
     * @link https://www.php.net/manual/zh/yaf-view-simple.render.php
     * @desc cn: 渲染一个视图模板, 得到结果
     * @desc en: Render a template and return the result.
     *
     * @param string $tpl
     * @param array $tpl_vars
     * @return string
     */
    function render($tpl, array $tpl_vars = null){}

    /**
     * @link https://www.php.net/manual/zh/yaf-view-simple.setscriptpath.php
     * @desc cn: 设置模板的基目录，这通常通过Yaf_Dispatcher调用。
     * @desc en: Set the templates base directory, this is usually called by \Yaf\Dispatcher
     *
     * @param string $template_dir An absolute path to the template directory, by default, \Yaf\Dispatcher use application.directory . "/views" as this parameter.
     * [模板目录的绝对路径，默认的Yaf_Dispatcher会设置此目录为application.directory . "/views".]
     */
    function setScriptPath($template_dir){}
}