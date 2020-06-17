<?php

/**
 * Created by IntelliJ IDEA.
 * Author: sgenmi
 * Date: 2020/6/16 下午12:48
 * Email: 150560159@qq.com
 */

namespace Yaf;

/**
 * Class Loader
 * @package Yaf
 * @link https://www.php.net/manual/zh/class.yaf-loader.php
 */
class Loader
{
    /**
     * @var string
     */
    protected $_local_ns ;
    /**
     * @var string
     */
    protected $_library ;
    /**
     * @var string
     */
    protected $_global_library ;
    /**
     * @var \Yaf\Loader
     */
    static $_instance ;

    private function __construct(){}

    /**
     * @link https://www.php.net/manual/zh/yaf-loader.autoload.php
     *
     * @param string $className
     * @return bool
     */
    public function autoload($className){}

    /**
     * @link https://www.php.net/manual/zh/yaf-loader.clearlocalnamespace.php
     * @desc cn: 清空本地命名空间
     * @desc en: clear local namespace
     *
     * @return bool
     */
    public function clearLocalNamespace(){}

    /**
     * @link https://www.php.net/manual/zh/yaf-loader.getinstance.php
     *
     * @param string $local_library_path
     * @param string $global_library_path
     * @return \Yaf\Loader
     */
    public static function getInstance($local_library_path = null, $global_library_path = null){}

    /**
     * @link https://www.php.net/manual/zh/yaf-loader.getlibrarypath.php
     * @desc cn: 获取libirary目录路径
     * @desc en: get the library path
     *
     * @param bool $is_global
     * @return string
     */
    public function getLibraryPath($is_global = false){}

    /**
     * @link https://www.php.net/manual/zh/yaf-loader.getnamespaces.php
     * @desc cn:获取本地所有自定义命名空间
     * @desc en: Retrive all register namespaces info
     *
     * @return array
     */
    public function getLocalNamespace(){}

    /**
     * @link https://www.php.net/manual/zh/yaf-loader.getnamespacepath.php
     * @desc cn: 获取注册名称空间的路径
     * @desc en:Retieve path of a registered namespace
     *
     * @param string $namespace
     * @return string
     */
    public function getNamespacePath( $namespace ){}

    /**
     * @link
     * @desc cn: 获取所有命名空间
     * @desc en: Get all register namespaces
     *
     * @return array
     */
    public function getNamespaces(){}

    /**
     * @link https://www.php.net/manual/zh/yaf-loader.import.php
     * @desc cn: 加载文件
     * @desc en: load file
     * @param string $file
     * @return bool
     */
    public static function import($file){}

    /**
     * @link https://www.php.net/manual/zh/yaf-loader.islocalname.php
     * @desc cn: 是否本地命名空间
     * @desc en: is local namespace
     *
     * @param string $class_name
     * @return bool
     */
    public function isLocalName($class_name){}

    /**
     * @link https://www.php.net/manual/zh/yaf-loader.registerlocalnamespace.php
     * @desc cn:注册本地类前缀
     * @desc en: register local class prefix
     *
     * @param string $name_prefix
     * @return bool
     */
    public function registerLocalNamespace($name_prefix){}

    /**
     * @link https://www.php.net/manual/zh/yaf-loader.registernamespace.php
     * @desc cn: 用路径注册一个命名空间，Yaf_Loader在路径中搜索该命名空间下的类，也可以通过application.library.directory.namespace（在application.ini中）进行配置；
     * @desc en: Register a namespace with searching path, Yaf_Loader searchs classes under this namespace in path, the one is also could be configureded via application.library.directory.namespace(in application.ini);
     *
     * @param string|array $namespaces
     * @param string $path
     * @return bool
     */
    public function registerNamespace($namespaces, $path){}

    /**
     * @link https://www.php.net/manual/zh/yaf-loader.setlibrarypath.php
     * @desc cn: 改变library路径
     * @desc en: change library path
     *
     * @param $directory
     * @param bool $is_global
     * @return \Yaf\Loader
     */
    public function setLibraryPath($directory, $is_global=false){}


}