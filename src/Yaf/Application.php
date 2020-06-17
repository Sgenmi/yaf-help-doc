<?php

/**
 * Created by IntelliJ IDEA.
 * Author: sgenmi
 * Date: 2020/6/15 下午7:11
 * Email: 150560159@qq.com
 */

namespace Yaf;


final class Application
{
    /**
     * @var \Yaf\Config_Abstract
     */
    protected $config ;
    /**
     * @var \Yaf\Dispatcher
     */
    protected $dispatcher ;
    /**
     * @var \Yaf\Application
     */
    protected static $_app ;
    /**
     * @var array
     */
    protected $_modules ;
    /**
     * @var string
     */
    protected $_running ;
    /**
     * @var string
     */
    protected $_environ ;

    /**
     * @link https://www.php.net/manual/zh/yaf-application.construct.php
     * Application constructor.
     * @param mixed $config
     * @param string|null $envrion
     */
    public function __construct($config, $envrion=null){}

    /**
     * @link https://www.php.net/manual/zh/yaf-application.destruct.php
     */
    public function __destruct(){}

    /**
     * @link https://www.php.net/manual/zh/yaf-application.app.php
     * @desc cn: 获取返回Yaf_Application的实例， 也可以使用Yaf_Dispatcher::getApplication()来得到Yaf_Application的实例 Yaf_Dispatcher::getApplication().
     * @desc en: Retrieve the \Yaf\Application instance, alternatively, we also could use \Yaf\Dispatcher::getApplication().
     *
     * @return  \Yaf\Application|NULL  an \Yaf\Application instance, if no \Yaf\Application initialized before, NULL will be returned. [如果在调用之前没有初始化一个Yaf_Application实例的话，它将返回NULL]
     *
     */
    public static function app() {}


    /**
     * @link https://www.php.net/manual/zh/yaf-application.bootstrap.php
     * @desc cn: 指示Yaf_Application去寻找Bootstrap，并按照声明的顺序，执行所有在Bootstrap类中定义的以_init开头的方法。 如果没有提供变量bootstrap，Yaf默认会去application.directory中寻找Bootstrap。
     * @desc en: Any method declared in Bootstrap class with leading "_init", will be called by \Yaf\Application::bootstrap() one by one according to their defined order
     *
     * @param Bootstrap_Abstract|null $bootstrap
     */
    public function bootstrap(\Yaf\Bootstrap_Abstract $bootstrap = null){}

    /**
     * @link https://www.php.net/manual/zh/yaf-application.clearlasterror.php
     * @desc cn: 清除最后的错误信息
     * @desc en: clear last error
     *
     */
    public function clearLastError(){}

    /**
     * @link https://www.php.net/manual/zh/yaf-application.environ.php
     * @desc cn: 获取当前Yaf_Application的环境名，它被定义在yaf.environ，默认值为"product"
     * @desc en: Retrieve environ which was defined in yaf.environ which has a default value "product"
     *
     * @return string
     */
    public function environ(){}

    /**
     * @link https://www.php.net/manual/zh/yaf-application.execute.php
     * @desc cn: 运行回调函数, 通常用于在cron任务中运行Yaf_Application。 在cron任务中也可以使用autoloader和Bootstrap机制。
     * @desc en:  This method is typically used to run \Yaf\Application in a crontab work. Make the crontab work can also use the autoloader and Bootstrap mechanism.
     * @param callable $entry
     * @param string $_
     */
    public function execute(callable $entry, $_ = "..."){}

    /**
     * @link https://www.php.net/manual/zh/yaf-application.getappdirectory.php
     * @desc cn: 获取应用的目录
     * @desc en: get application DIRECTORY
     *
     *@return string
     */
    public function getAppDirectory(){}

    /**
     * @link https://www.php.net/manual/zh/yaf-application.getconfig.php
     * @desc cn: 获取 Yaf_Config_Abstract 的实例
     * @desc en: get Yaf_Config_Abstract
     *
     * @return \Yaf\Config_Abstract
     */
    public function getConfig(){}

    /**
     * @link
     * @desc cn: 获取 Yaf_Dispatcher 的实例
     * @desc en: get Yaf_Dispatcher
     *
     * @return \Yaf\Dispatcher
     */
    public function getDispatcher(){}

    /**
     * @link https://www.php.net/manual/zh/yaf-application.getlasterrormsg.php
     * @desc cn: 获取最近产生的错误的错误信息
     * @desc en: get last error message
     *
     * @return string
     */
    public function getLastErrorMsg(){}

    /**
     * @link https://www.php.net/manual/zh/yaf-application.getlasterrorno.php
     * @desc cn: 获取最后产生的错误的错误代码
     * @desc en: get last error number
     *
     * @return int
     */
    public function getLastErrorNo(){}


    /**
     * @link https://www.php.net/manual/zh/yaf-application.getmodules.php
     * @desc cn: 获取在配置文件中声明的模块，如果没有声明，它的默认值将是"Index"。
     * @desc en: Get the modules list defined in config, if no one defined, there will always be a module named "Index".
     *
     * @return array
     */
    public function getModules(){}

    /**
     * @link https://www.php.net/manual/zh/yaf-application.run.php
     * @desc cn: 运行一个Yaf_Application，开始接受并处理请求，分发路由，做出相应的响应。最终将响应返回给客户端。
     * @desc en: Run a \Yaf\Application, let the \Yaf\Application accept a request, and route the request, dispatch to controller/action, and render response. return response to client finally.
     *
     */
    public function run(){}

    /**
     * @link https://www.php.net/manual/zh/yaf-application.setappdirectory.php
     * @desc cn:  设置应用目录
     * @desc en: set application directory
     *
     * @return \Yaf\Application
     */
    public function setAppDirectory(){}



}