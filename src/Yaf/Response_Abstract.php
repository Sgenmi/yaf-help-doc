<?php

/**
 * Created by IntelliJ IDEA.
 * Author: sgenmi
 * Date: 2020/6/15 上午10:22
 * Email: 150560159@qq.com
 */

namespace Yaf;

/**
 * Class Response_Abstract
 * @package Yaf
 *
 * @link https://www.php.net/manual/zh/class.yaf-response-abstract.php
 */

abstract class Response_Abstract
{
    const DEFAULT_BODY = "content";

    /* 属性 */
    protected $_header ;
    protected $_body ;
    protected $_sendheader ;

    /**
     * @link https://www.php.net/manual/zh/yaf-response-abstract.construct.php
     * Response_Abstract constructor.
     */
    public function __construct (){}

    /**
     * @link https://www.php.net/manual/zh/yaf-response-abstract.destruct.php
     */
    public function __destruct (){}

    /**
     * @link https://www.php.net/manual/zh/yaf-response-abstract.tostring.php
     */
    private function __toString () {}


    /**
     * @link https://www.php.net/manual/en/yaf-response-abstract.appendbody.php
     * @desc cn: 往已有的响应body后附加新的内容, $key参数是保留参数, 目前没有特殊效果, 留空即可
     * @desc en: Append a content to a exists content block
     *
     * @param $content
     * @param null $key  the content key, you can set a content with a key, if you don't specific, then \Yaf\Response_Abstract::DEFAULT_BODY will be used
     * @return bool
     *
     */
    public function appendBody($content, $key=null){}

    /**
     * @link https://www.php.net/manual/zh/yaf-response-abstract.clearbody.php
     * @desc cn:清除已经设置的响应body
     * @desc en: Clear existing content
     *
     * @param string $key the content key, if you don't specific, then all contents will be cleared [如果你没选择具体清除哪个key所对应的内容，那所有内容将被清除]
     * @return bool
     */
    public function clearBody($key=null){}

    /**
     * @link https://www.php.net/manual/zh/yaf-response-abstract.clearheaders.php
     * @desc cn:清除响应头部
     * @desc en: Clear existing headers
     *
     * @return bool
     */
    public function clearHeaders(){}


    /**
     * @link https://www.php.net/manual/zh/yaf-response-abstract.getbody.php
     * @desc cn:获取已经设置的响应body
     * @desc en:Retrieve an existing content
     *
     * @param null $key the content key, if you don't specific, then \Yaf\Response_Abstract::DEFAULT_BODY will be used. if you pass in a NULL, then all contents will be returned as a array
     * [body所对应的key，如果你没指定key，系统默认使用Yaf_Response_Abstract::DEFAULT_BODY。如果你传入一个NULL，所有的内容将会以数组形式被返回。]
     * @return mixed
     */
    public function getBody($key=null){}


    /**
     * @link https://www.php.net/manual/zh/yaf-response-abstract.getheader.php
     *
     * @return mixed
     */
    public function getHeader(){}


    /**
     * @link https://www.php.net/manual/zh/yaf-response-abstract.prependbody.php
     * @desc cn: 往已有的响应body前插入新的内容
     * @desc en: prepend a content to a exists content block
     * @param string $content
     * @param string $key the content key, you can set a content with a key, if you don't specific, then \Yaf\Response_Abstract::DEFAULT_BODY will be used
     * [body所对应的key，你可以设置一个body的键值对，如果你没有指定key，系统默认使用Yaf_Response_Abstract::DEFAULT_BODY yaf>2.2.0]
     * @return bool
     */
    public function prependBody($content, $key = self::DEFAULT_BODY){}


    /**
     * @link https://www.php.net/manual/zh/yaf-response-abstract.response.php
     * @desc cn:输出内容
     * @desc en: send response
     *
     */
    public function response(){}

    /**
     * @link https://www.php.net/manual/zh/yaf-response-abstract.setallheaders.php
     *
     */
    public function setAllHeaders(){}

    /**
     * @link https://www.php.net/manual/zh/yaf-response-abstract.setbody.php
     * @desc cn:设置响应的Body
     * @desc en: Set content to response
     * @param $content
     * @param string $key the content key, you can set a content with a key, if you don't specific, then \Yaf\Response_Abstract::DEFAULT_BODY will be used
     * [body所对应的key，你可以设置一个body的键值对，如果你没有指定key，系统默认使用Yaf_Response_Abstract::DEFAULT_BODY]
     * @return bool
     */
    public function setBody($content, $key = self::DEFAULT_BODY){}


    /**
     * @link https://www.php.net/manual/zh/yaf-response-abstract.setheader.php
     * @desc cn:set响应头部
     * @desc en:send headers
     * @param string $header
     * @param string $val
     */
    public function setHeader($header, $val){}

    /**
     * @link https://www.php.net/manual/zh/yaf-response-abstract.setredirect.php
     *
     */
    public function setRedirect(){}


}