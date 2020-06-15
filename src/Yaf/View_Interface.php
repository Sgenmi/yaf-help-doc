<?php

/**
 * Created by IntelliJ IDEA.
 * Author: sgenmi
 * Date: 2020/6/15 下午2:21
 * Email: 150560159@qq.com
 */

namespace Yaf;

/**
 * Interface View_Interface
 * @package Yaf
 * @link https://www.php.net/manual/zh/class.yaf-view-interface.php
 */
interface View_Interface
{
    /**
     * @link http://www.php.net/manual/zh/yaf-view-interface.assign.php
     * @desc cn: 为视图引擎分配一个模板变量, 在视图模板中可以直接通过${$name}获取模板变量值
     * @desc en: Assign values to View engine, then the value can access directly by name in template.
     * @param string $name
     * @param mixed $value
     * @return bool
     */
    function assign($name, $value);

    /**
     * @link http://www.php.net/manual/zh/yaf-view-interface.display.php
     * @desc cn: 渲染一个视图模板, 并直接输出给请求端
     * @desc en: Render a template and output the result immediately.
     *
     * @param string $tpl
     * @param array $tpl_vars
     * @return bool
     */
    function display($tpl, array $tpl_vars = null);

    /**
     * @link http://www.php.net/manual/zh/yaf-view-interface.getscriptpath.php
     * @desc cn: 获取模板目录
     * @desc en: Get the templates base directory
     * @return string
     */
    function getScriptPath();

    /**
     * @link http://www.php.net/manual/zh/yaf-view-interface.render.php
     * @desc cn: 渲染一个视图模板, 得到结果
     * @desc en: Render a template and return the result.
     *
     * @param string $tpl
     * @param array $tpl_vars
     * @return string
     */
    function render($tpl, array $tpl_vars = null);

    /**
     * @link http://www.php.net/manual/zh/yaf-view-interface.setscriptpath.php
     * @desc cn: 设置模板的基目录，这通常通过Yaf_Dispatcher调用。
     * @desc en: Set the templates base directory, this is usually called by \Yaf\Dispatcher
     *
     * @param string $template_dir An absolute path to the template directory, by default, \Yaf\Dispatcher use application.directory . "/views" as this parameter.
     * [模板目录的绝对路径，默认的Yaf_Dispatcher会设置此目录为application.directory . "/views".]
     */
    function setScriptPath($template_dir);

}