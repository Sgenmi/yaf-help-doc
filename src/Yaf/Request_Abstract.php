<?php

/**
 * Created by IntelliJ IDEA.
 * Author: sgenmi
 * Date: 2020/5/14 上午11:21
 * Email: 150560159@qq.com
 */

namespace Yaf;


abstract class Request_Abstract
{
    /* Constants */
    const  SCHEME_HTTP = 'http' ;
    const  SCHEME_HTTPS = 'https' ;

    /**
     * @var string
     */
    public $module ;
    /**
     * @var string
     */
    public $controller ;
    /**
     * @var string
     */
    public $action ;
    /**
     * @var string
     */
    public $method ;
    /**
     * @var array
     */
    protected $params ;

    /**
     * @var string
     */
    protected $language ;

    /**
     * @var Exception
     */
    protected $_exception ;

    /**
     * @var string
     */
    protected $_base_uri ;

    /**
     * @var string
     */
    protected $uri ;

    /**
     * @var string
     */
    protected $dispatched ;
    /**
     * @var string
     */
    protected $routed ;

    /**
     * @link https://www.php.net/manual/zh/yaf-request-abstract.clearparams.php
     *
     * Remove all params set by router, or \Yaf\Request_Abstract::setParam()
     * @version >=3.20
     * @return boolean
     */
    public function clearParams () {}

    /**
     * @link https://www.php.net/manual/zh/yaf-request-abstract.getactionname.php
     *
     * get action name
     * @return string
     */
    public function getActionName () {}

    /**
     * @link https://www.php.net/manual/zh/yaf-request-abstract.getbaseuri.php
     * @return string
     */
    public function getBaseUri () {}

    /**
     * @link https://www.php.net/manual/zh/yaf-request-abstract.getcontrollername.php
     * @return string
     */
    public function getControllerName () {}

    /**
     * @param string $name
     * @param string| mixed $default_value
     * @return mixed
     */
    public function getEnv ( $name=null , $default_value=null ) {}

    /**
     * @link https://www.php.net/manual/zh/yaf-request-abstract.getexception.php
     * @return Exception
     */
    public function getException () {}

    /**
     * @link https://www.php.net/manual/zh/yaf-request-abstract.getlanguage.php
     * @return string
     */
    public function getLanguage () {}

    /**
     * @link https://www.php.net/manual/zh/yaf-request-abstract.getmethod.php
     * @return string
     */
    public function getMethod () {}

    /**
     * @link https://www.php.net/manual/zh/yaf-request-abstract.getmodulename.php
     * @return string
     */
    public function getModuleName () {}

    /**
     * @link https://www.php.net/manual/zh/yaf-request-abstract.getparam.php
     *
     * @param string $name
     * @param mixed $default
     * @return mixed
     */
    public function getParam ($name,$default =null) {}

    /**
     * @link https://www.php.net/manual/zh/yaf-request-abstract.getparams.php
     *
     * @return array
     */
    public function getParams () {}

    /**
     * @link https://www.php.net/manual/zh/yaf-request-abstract.getrequesturi.php
     *
     * @return string
     */
    public function getRequestUri ( ) {}

    /**
     * @link https://www.php.net/manual/zh/yaf-request-abstract.getserver.php
     *
     * @param string $name
     * @param mixed $default
     * @return mixed
     */

    public function getServer ( $name , $default=null ) {}

    /**
     * @link https://www.php.net/manual/zh/yaf-request-abstract.iscli.php
     *
     * @return boolean
     */
    public function isCli ( ) {}
    /**
     * @link https://www.php.net/manual/zh/yaf-request-abstract.isdispatched.php
     *
     * @return boolean
     */
    public function isDispatched () {}

    /**
     * @link https://www.php.net/manual/zh/yaf-request-abstract.isget.php
     *
     * @return boolean
     */
    public function isGet () {}
    /**
     * @link https://www.php.net/manual/zh/yaf-request-abstract.ishead.php
     *
     * @return boolean
     */
    public function isHead () {}
    /**
     * @link https://www.php.net/manual/zh/yaf-request-abstract.isoptions.php
     *
     * @return boolean
     */
    public function isOptions () {}
    /**
     * @link https://www.php.net/manual/zh/yaf-request-abstract.ispost.php
     *
     * @return boolean
     */
    public function isPost () {}

    /**
     * @link https://www.php.net/manual/zh/yaf-request-abstract.isput.php
     *
     * @return boolean
     */
    public function isPut () {}
    /**
     * @link https://www.php.net/manual/zh/yaf-request-abstract.isrouted.php
     *
     * @return boolean
     */
    public function isRouted () {}
    /**
     * @link https://www.php.net/manual/zh/yaf-request-abstract.isxmlhttprequest.php
     *
     * @return boolean
     */
    public function isXmlHttpRequest () {}

    /**
     * @link https://www.php.net/manual/zh/yaf-request-abstract.setactionname.php
     *
     * @param string $action
     * @return boolean
     */
    public function setActionName ( $action ) {}

    /**
     * @link https://www.php.net/manual/zh/yaf-request-abstract.setbaseuri.php
     *
     * @param string $uri
     * @return boolean
     */
    public function setBaseUri ( $uri ) {}

    /**
     * @link https://www.php.net/manual/zh/yaf-request-abstract.setcontrollername.php
     *
     * @param string $controller
     * @return boolean
     */
    public function setControllerName ($controller ) {}

    /**
     * @link https://www.php.net/manual/zh/yaf-request-abstract.setdispatched.php
     *
     * @return boolean
     */
    public function setDispatched () {}

    /**
     * @link https://www.php.net/manual/zh/yaf-request-abstract.setmodulename.php
     *
     * @param string $module
     * @return boolean
     */
    public function setModuleName ($module ) {}

    /**
     * @link https://www.php.net/manual/zh/yaf-request-abstract.setparam.php
     *
     * @param string $name
     * @param mixed $value
     * @return boolean
     */
    public function setParam ( $name ,$value=null ) {}

    /**
     * @link https://www.php.net/manual/zh/yaf-request-abstract.setrequesturi.php
     *
     * @param string $uri
     * @return boolean
     */

    public function setRequestUri ( $uri ) {}

    /**
     * @link https://www.php.net/manual/zh/yaf-request-abstract.setrouted.php
     *
     * @param string $flag
     * @return boolean
     */
    public function setRouted ($flag  ) {}


}