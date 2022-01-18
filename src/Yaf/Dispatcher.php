<?php

/**
 * Created by IntelliJ IDEA.
 * Author: sgenmi
 * Date: 2020/6/16 下午12:48
 * Email: 150560159@qq.com
 */

namespace Yaf;

/**
 * Class Dispatcher
 * @package Yaf
 * @link  https://www.php.net/manual/zh/class.yaf-dispatcher.php
 */
final class Dispatcher
{
    /**
     * @var \Yaf\Router
     */
    protected $_router ;
    /**
     * @var \Yaf\View_Interface
     */
    protected $_view ;
    /**
     * @var \Yaf\Request_Abstract
     */
    protected $_request ;
    /**
     * @var \Yaf\Plugin_Abstract
     */
    protected $_plugins ;
    /**
     * @var \Yaf\Dispatcher
     */
    protected static $_instance ;
    /**
     * @var bool
     */
    protected $_auto_render =true;
    /**
     * @var string
     */
    protected $_return_response='' ;
    /**
     * @var string
     */
    protected $_instantly_flush ='';
    /**
     * @var string
     */
    protected $_default_module ;
    /**
     * @var string
     */
    protected $_default_controller ;
    /**
     * @var string
     */
    protected $_default_action ;

    public function __construct(){}

    /**
     * @link https://www.php.net/manual/zh/yaf-dispatcher.autorender.php
     * @desc cn: 在开启的情况下(Yaf默认开启)，action执行完成以后，Yaf_Dispatcher 会自动调用view引擎去渲染该action对应的视图模板。 你也可以通过调用这个函数并将 flag 参数的值设为TRUE来人工干预它。
     * @desc en: \Yaf\Dispatcher will render automatically after dispatches an incoming request, you can prevent the rendering by calling this method with $flag TRUE
     *
     * @param bool $flag
     * @return \Yaf\Dispatcher
     */
    public function autoRender($flag=true){}

    /**
     * @link https://www.php.net/manual/zh/yaf-dispatcher.catchexception.php
     * @desc cn: 开启/关闭自动异常捕获功能
     * @desc en: turn on/off automatic exception
     *
     * @param bool|null $flag
     * @return \Yaf\Dispatcher
     */
    public function catchException($flag=null){}


    /**
     * @link https://www.php.net/manual/zh/yaf-dispatcher.disableview.php
     * @desc cn:  关闭自动渲染,用户自己会输出信息的情况下使用
     * @desc en: disable view engine, used in some app that user will output by himself
     *
     * @return bool
     */
    public function disableView(){}

    /**
     * @link https://www.php.net/manual/zh/yaf-dispatcher.dispatch.php
     * @desc cn: Yaf_Dispatcher 的这个方法做的工作很繁重.它需要一个request对象
     * @desc en: This method does the heavy work of the \Yaf\Dispatcher. It take a request object.
     *
     * @param Request_Abstract $request
     * @return Response_Abstract
     */
    public function dispatch(\Yaf\Request_Abstract $request){}

    /**
     * @link https://www.php.net/manual/zh/yaf-dispatcher.enableview.php
     * @desc cn: 开启自动渲染
     * @desc en: enable view rendering
     *
     * @return \Yaf\Dispatcher
     */
    public function enableView(){}

    /**
     * @link https://www.php.net/manual/zh/yaf-dispatcher.flushinstantly.php
     * @desc cn: 打开/关闭自动响应
     * @desc en: Switch on/off the instant flushing
     *
     * @param bool $flag
     * @return \Yaf\Dispatcher
     */
    public function flushInstantly($flag=null){}

    /**
     * @link https://www.php.net/manual/zh/yaf-dispatcher.getapplication.php
     * @desc cn: 获取当前的Yaf_Application实例,跟 Yaf_Application::app() 相同
     * @desc en:  Retrieve the \Yaf\Application instance. same as \Yaf\Application::app().
     *
     * @return \Yaf\Application
     */
    public function getApplication(){}

    /**
     * @link https://www.php.net/manual/zh/yaf-dispatcher.getdefaultaction.php
     * @desc cn: 获取默认控制器名
     * @desc en: Get the default action name
     *
     * @return string
     */
    public function getDefaultAction(){}

    /**
     * @link https://www.php.net/manual/zh/yaf-dispatcher.getdefaultcontroller.php
     * @desc cn: 获取默认控制器名
     * @desc en: Get the default controller name
     *
     * @return string
     */
    public function getDefaultController(){}

    /**
     * @link https://www.php.net/manual/zh/yaf-dispatcher.getdefaultmodule.php
     * @desc cn: 获取默认模块名
     * @desc en: Get the default module name
     *
     * @return string
     */
    public function getDefaultModule(){}

    /**
     * @link https://www.php.net/manual/zh/yaf-dispatcher.getinstance.php
     * @desc cn: 获取当前的Yaf_Dispatcher实例
     * @desc en: Retrieve the \Yaf\Dispatcher instance
     *
     * @return \Yaf\Dispatcher
     */
    public function getInstance(){}

    /**
     * @link https://www.php.net/manual/zh/yaf-dispatcher.getrequest.php
     * @desc cn: 获取当前的请求实例
     * @desc en:  Retrieve the \Yaf\Request_Abstract instance
     *
     * @return \Yaf\Request_Abstract
     */
    public function getRequest(){}

    /**
     * @link https://www.php.net/manual/zh/yaf-dispatcher.getrouter.php
     * @desc cn: 获取路由实例
     * @desc en: Retrieve the \Yaf\Router instance
     *
     * @return \Yaf\Router
     */
    public function getRouter(){}

    /**
     * @link https://www.php.net/manual/zh/yaf-dispatcher.initview.php
     * @desc cn: 初始化视图引擎并返回
     * @desc en: Initialize view and return it
     *
     * @param string $templates_dir
     * @param array $options
     * @return \Yaf\View_Interface
     */
    public function initView($templates_dir, array $options = null){}

    /**
     * @link https://www.php.net/manual/zh/yaf-dispatcher.registerplugin.php
     * @desc cn: 注册一个插件（请参见\ Yaf \ Plugin_Abstract）。通常，我们在Bootstrap中注册插件（请参见\ Yaf \ Bootstrap_Abstract）
     * @desc en: Register a plugin(see \Yaf\Plugin_Abstract). Generally, we register plugins in Bootstrap(see \Yaf\Bootstrap_Abstract)
     *
     * @param Plugin_Abstract $plugin
     */
    public function registerPlugin(\Yaf\Plugin_Abstract $plugin){}

    /**
     * @link https://www.php.net/manual/zh/yaf-dispatcher.returnresponse.php
     * @desc cn: 返回response
     * @sesc en: The returnResponse purpose
     *
     * @param bool $flag
     * @return \Yaf\Dispatcher
     */
    public function returnResponse($flag){}

    /**
     * @link https://www.php.net/manual/zh/yaf-dispatcher.setdefaultaction.php
     * @desc cn: 设置路由的默认动作
     * @desc en: Change default action name
     *
     * @param $action
     * @return \Yaf\Dispatcher
     */
    public function setDefaultAction($action){}


    /**
     * @link https://www.php.net/manual/zh/yaf-dispatcher.setdefaultcontroller.php
     * @desc cn: 设置路由的默认控制器
     * @desc en: Change default controller name
     *
     * @param $controller
     * @return \Yaf\Dispatcher
     */
    public function setDefaultController($controller){}


    /**
     * @link https://www.php.net/manual/zh/yaf-dispatcher.setdefaultmodule.php
     * @desc cn: 设置路由的默认模块
     * @desc en: Change default module name
     *
     * @param $module
     * @return \Yaf\Dispatcher
     */
    public function setDefaultModule($module){}

    /**
     * @link https://www.php.net/manual/zh/yaf-dispatcher.seterrorhandler.php
     * @desc cn: 设置错误处理函数，一般在application.dispatcher.throwException关闭的情况下，Yaf会在出错的时候触发错误，这个时候，如果设置了错误处理函数，则会把控制交给错误处理函数处理。因此，当错误发生的时候这个错误处理函数将被调用。
     * @desc en: Set error handler for Yaf. when application.dispatcher.throwException is off, Yaf will trigger catch-able error while unexpected errors occurred. Thus, this error handler will be called while the error raise.
     *
     * @param callable $callback,
     * @param int $error_types
     * @return \Yaf\Dispatcher
     */
    public function setErrorHandler(callable $callback, $error_types ){}

    /**
     * @link https://www.php.net/manual/zh/yaf-dispatcher.setrequest.php
     * @desc cn: 设置 请求实例
     * @desc en: The setRequest purpose
     *
     * @param Request_Abstract $request
     * @return \Yaf\Dispatcher
     */
    public function setRequest(\Yaf\Request_Abstract $request){}

    /**
     * @link https://www.php.net/manual/zh/yaf-dispatcher.setview.php
     * @desc cn: 设置视图引擎 如果你想使用自己的视图引擎代替 Yaf_View_Simple ， 这个函数会帮你解决这个问题。
     * @desc en: This method provides a solution for that if you want use a custom view engine instead of \Yaf\View\Simple
     *
     * @param View_Interface $view
     * @return \Yaf\Dispatcher
     */
    public function setView(\Yaf\View_Interface $view){}

    /**
     * @link https://www.php.net/manual/zh/yaf-dispatcher.throwexception.php
     * @desc cn: 当意外的错误发生的时候，开启/关闭异常抛出。 当开启的时候，Yaf将会抛出异常而不是触发可捕捉的错误。你也可以使用 application.dispatcher.throwException来达到相同的目的。
     * @desc en: Switch on/off exception throwing while unexpected error occurring. When this is on, Yaf will throwing exceptions instead of triggering catchable errors. You can also use application.dispatcher.throwException to achieve the same purpose.
     *
     * @param bool $flag
     * @return \Yaf\Dispatcher
     */
    public function throwException($flag =null){}

    /**
     * @link
     *
     * @desc cn: 获取Reponse实例
     * @desc en: Retrieve the \Yaf\Response instance
     * @version >= 3.2.1
     * @return \Yaf\Response_Abstract
     */
    public function getReponse(){}

    /**
     * @link
     *
     * @desc cn: 设置Reponse实例
     * @desc en: Set the \Yaf\Response instance
     * @version >= 3.2.2
     * @return \Yaf\Dispatcher
     */
    public function setResponse(\Yaf\Response_Abstract $response){}



}