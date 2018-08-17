<?php
/**
 * Created by PhpStorm.
 * User: zhaoge
 * Date: 2018-08-16
 * Time: 12:38
 */

namespace app\lib\exception;
/**
 * 未找到资源异常 （404）
 */

class NoResourcesFound extends BaseException
{
    public $code = 404;
    public $msg = 'no resources found';
    public $errorCode= 10001;



}