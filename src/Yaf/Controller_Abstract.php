<?php

/**
 * Created by IntelliJ IDEA.
 * Author: sgenmi
 * Date: 2020/6/15 下午3:31
 * Email: 150560159@qq.com
 */

namespace Yaf;


abstract class Controller_Abstract
{
    /**
     * @var
     */
    public $actions ;

    /**
     * @var string module name
     */
    protected $_module ;
    /**
     * @var string controller name
     */
    protected $_name ;
    /**
     * @var \Yaf\Request_Abstract
     */
    protected $_request ;
    /**
     * @var \Yaf\Response_Abstract
     */
    protected $_response ;
    /**
     * @var array
     */
    protected $_invoke_args ;
    /**
     * @var \Yaf\View_Interface
     */
    protected $_view ;


    final public function __construct(){}

    /**
     * @link https://www.php.net/manual/zh/yaf-controller-abstract.display.php
     *
     * @param string $tpl
     * @param array|null $parameters
     * @return bool
     */
    public function display($tpl, array $parameters=null){}

    /**
     * @link https://www.php.net/manual/zh/yaf-controller-abstract.forward.php
     * @desc cn: 将当前的请求转交给另外的Action.
     * @desc en: forward current execution process to other action.
     *
     * @param string $module
     * @param string|null $controller
     * @param string|null $action
     * @param array|null $parameters
     */
    public function forward($module, $controller = null, $action = null, array $parameters = null){}

    /**
     * @link https://www.php.net/manual/zh/yaf-controller-abstract.getinvokearg.php
     *
     * @param string $name
     * @return mixed
     */
    public function getInvokeArg($name){}

    /**
     * @link https://www.php.net/manual/zh/yaf-controller-abstract.getinvokeargs.php
     *
     * @return mixed
     */
    public function getInvokeArgs(){}

    /**
     * @link https://www.php.net/manual/zh/yaf-controller-abstract.getmodulename.php
     * @desc cn: 获取当前控制器所属的模块名
     * @desc en: get the controller's module name
     *
     * @return string
     */
    public function getModuleName(){}

    /**
     * @link https://www.php.net/manual/zh/yaf-controller-abstract.getname.php
     * @desc cn:获取当前控制器名
     * @desc en: get the controller's name
     *
     * @return string
     */
    public function getName(){}

    /**
     * @link https://www.php.net/manual/zh/yaf-controller-abstract.getrequest.php
     * @desc cn: 获取request对象
     * @desc en:  retrieve current request object
     *
     * @return \Yaf\Request_Abstract
     *
     */
    public function getRequest(){}

    /**
     * @link https://www.php.net/manual/zh/yaf-controller-abstract.getresponse.php
     * @desc cn: 获取response对象
     * @desc en: retrieve current response object
     *
     * @return \Yaf\Response_Abstract
     */
    public function getResponse(){}

    /**
     * @link https://www.php.net/manual/zh/yaf-controller-abstract.getview.php
     * @desc cn:获取当前的视图引擎
     * @desc en:retrieve view engine
     *
     * @return \Yaf\View_Interface
     */
    public function getView(){}

    /**
     * @link https://www.php.net/manual/zh/yaf-controller-abstract.getviewpath.php
     * @desc cn:获取视图目录路径
     * @desc en: get the templates directory
     *
     * @return string
     */
    public function getViewpath(){}

    /**
     * @link https://www.php.net/manual/zh/yaf-controller-abstract.init.php
     * @desc cn: 控制器初始化, Yaf_Controller_Abstract::__construct() 是final类型，所以用户不能重载它。但是用户可以定义 Yaf_Controller_Abstract::init()，该函数会在控制器对象实例化之后被调用。
     * @desc en:\Yaf\Controller_Abstract::__construct() is final, which means users can not override it. but users can define
     *
     */
    public function init(){}

    /**
     * @link https://www.php.net/manual/zh/yaf-controller-abstract.initview.php
     *
     * @param array|null $opions
     */
    public function initView(array $opions=null){}

    /**
     * @link https://www.php.net/manual/zh/yaf-controller-abstract.redirect.php
     * @desc cn: 重定向 302跳转
     * @desc en: redirect to a URL by sending a 302 header
     *
     * @param string $url
     */
    public function redirect($url){}

    /**
     * @link https://github.com/elad-yosifon/php-yaf-doc/blob/master/Yaf/Controller_Abstract.php
     * @desc cn:渲染视图模板并返回结束
     * @desc en: Render a template and return the result.
     *
     * @param string $tpl
     * @param array|null $parameters
     * @return string
     */
    public function render($tpl, array $parameters = null){}

    /**
     * @link https://www.php.net/manual/zh/yaf-controller-abstract.setviewpath.php
     * @desc cn:设置视图路径
     * @desc en: set the templates directory
     *
     * @param string $view_directory
     * @return bool
     */
    public function setViewpath($view_directory){}

}